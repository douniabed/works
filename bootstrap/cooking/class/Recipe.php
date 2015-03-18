<?php

/****************************  Propriétées  **********************************/
class recipe{
	const RECIPE_TYPE_CAKE = 1;
	const RECIPE_TYPE_FAST_FOOD = 2;
	const RECIPE_TYPE_SOUP = 3;


	private $id;
	private $type;
	private $title;
	private $ingredients;
	private $content;
	private $picture;
	private $date;

	public static $type_labels = array(
		self::RECIPE_TYPE_CAKE => 'gateaux',
		self::RECIPE_TYPE_FAST_FOOD => 'fast-food',
		self::RECIPE_TYPE_SOUP => 'soupes'
	);


/****************************  Constructeur   ********************************/


	public function __construct($recipe=array()){

		// Si le tableau recette n'est pas vide
		if(!empty($recipe)){
			// on recupere la clé et la valeur pour chaque ligne du tableau
			foreach ($recipe as $key => $value) {
				$method = 'set' .ucfirst($key);
				// Si la methode est defini dans ma class
				if(method_exists($this, $method)){
					// On execute la methode
					$this->$method($value);
				}
			}
		}
	}

/********************  Récuperation des données depuis la bd  *******************/

// Pour afficher toutes les recettes

	private static function _getList($result){
		$recipes = array();
		foreach ($result as $recipe) {
			// Rajouter les recettes remonter de la base dans notre tableau
			$recipes[] = new Recipe($recipe);
		}
		return $recipes; // Afficher toutes les recettes
	}


	public static function getList($limit = 0, $order =''){

		$sql = 'SELECT * FROM recipes ';

		if(!empty($order)){
			$sql .= 'ORDER BY '.$order.' ';
		}

		$sql .= 'LIMIT :limit';

		$query=Db::getInstance()->prepare($sql);
		$query->bindValue('limit', $limit, PDO::PARAM_INT);
		$query->execute();
		$result = $query->fetchAll();

		return self::_getList($result);
	}


	public static function getListByType($type){
		$query=Db::getInstance()->prepare('SELECT * FROM recipes WHERE type = :type');
		$query->bindValue('type', $type, PDO::PARAM_INT);
		$query->execute();
		$result = $query->fetchAll();

		return self::_getList($result);
	}

	public static function get($id){
		$query=Db::getInstance()->prepare('SELECT * FROM recipes WHERE id = :id');
		$query->bindValue('id', $id, PDO::PARAM_INT);
		$query->execute();

		if ($query->rowCount() == 0){
			throw new Exception("Recipe not found from db with id = $id");
		}
		return new Recipe($query->fetch());
	}

	public static function getRandom(){
		$result= self::getList(1, 'RAND()');
		return $result[0];
	}



	public static function getTypeLabel($type){
		if(isset(self::$type_labels[$type])){
			return self::$type_labels[$type];
		}
		return 'cuisine';
	}

/**************************  Seters  ***************************************/


	public function setId($id){
		if(!is_numeric($id) || $id<0){
			throw new Exception('id doit etre un chiffre');
		}
		$this->id = $id;
	}

	public function settype($type){
		if(!is_numeric($type) || $type<0 || $type>99){
			throw new Exception('Le type est un text et il est inferrieur à 100');
		}
		$this->type = $type;
	}

	public function setTitle($title){
		if( strlen($title)<0 || strlen($title)>99){
			throw new Exception('Le titre est un text et il est inferrieur à 100');
		}
		$this->title = $title;
	}
	public function setIngredients($ingredients){
		$this->ingredients = $ingredients;
	}
	public function setContent($content){
		$this->content = $content;
	}
	public function setPicture($picture){
		if(strlen($picture) >100){
			throw new Exception('La longueur de l\'image ne doit pas etre inferrieur à 100');
		}
		$this->picture = $picture;
	}
	public function setDate($date){
		if (strtotime($date) === false) {
			throw new Exception("La date doit etre au format Y-m-d H:i:s");
		}
		$this->date = $date;
	}



/******************************  Geters  **********************************/



	public function getId(){
		return $this->id;
	}
	public function gettype(){
		return $this->type;
	}
	public function getTitle(){
		return ucfirst($this->title) ;
	}
	public function getIngredients(){
		return nl2br($this->ingredients);
	}
	public function getContent($max_length = 0, $end='...'){
		return nl2br(Utils::cutstring($this->content, $max_length, $end));
	}
	public function getPicture(){
		if (!empty($this->picture)){
			$path = 'img/'.$this->picture;
			if(file_exists($path)){
				return $path;
			}
		}
		return 'img/recipe.png';
	}
	public function getDate($format = 'Y-m-d H:i:s'){
		return date($format, strtotime($this->date));
	}

}