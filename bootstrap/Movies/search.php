<?php
include_once 'header.php';

// Inclus le fichier et interropt le script si le fichier n'existe pas


$genres = query('SELECT genre_label, genre_name FROM genres ORDER BY genre_name ASC');

?>

<h1>Recherche</h1>

<hr>

<form class="form-inline" action="search.php" method="GET">
	
	<input type ="hidden" name = "advanced_search" value="1">

	<div class="form-group">
		<label for="title">Titre</label>
		<input type="text" id="title" name="title" class="form-control" placeholder="Star Wars" value="">
	</div>

	<div class="form-group">
		<label for="title">Genre</label>
		<select id="genre" name="genre" class="form-control">
			<option value="">...</option>
			<?php foreach ($genres as $genre) {?>
			<option value="<?= $genre['genre_label'] ?>"><?= $genre['genre_name'] ?></option>
			<?php } ?>
		</select>
	</div>

	<div class="form-group">
		<label for="title">Année</label>
		<select id="year" name="year" class="form-control">
			<option value="">...</option>
			<?php for ($i = date('Y'); $i >= 1888; $i--){ ?>
			<option value="<?= $i ?>"><?= $i?></option>
			<?php } ?>
						
		</select>
	</div>

	<div class="form-group">
		<label for="title">Acteur</label>
		<input type="text" id="casting" name="casting" class="form-control" placeholder="Christopher Lloyd" value="">
	</div>

	<div class="form-group">
		<label for="title">Réalisateur</label>
		<input type="text" id="director" name="director" class="form-control" placeholder="Robert Zemeckis" value="">
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-default">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Rechercher
		</button>
	</div>
</form>

<?php
//$search = !empty($_GET['search']) ? $_GET['search'] : '';

if (!empty($_GET['search'])){
	$search = $_GET['search'];

	$search_results = query('SELECT * FROM movies WHERE title LIKE "%'.$search.'%"');
	
	echo '<hr>';

	
} else if (!empty($_GET['advanced_search'])){

	$values = array();

	// On iitialise le where à 1 de la requete
	// Pour ajouter les filtres avec les AND
	$sql = 'SELECT * FROM movies WHERE 1';
	
	//Si on a renseigné un titre dans le formulaire
	if (!empty($_GET['title'])){
		// On ajoute un filtre à la requete
		$sql .= ' AND title LIKE :title ';
		// On rajoute la clé et la valeur du champ pour faire le bind Value
		$values["title"] = '%'.$_GET['title'].'%';
	}
	if (!empty($_GET['casting'])){
		$sql .= ' AND cast LIKE :actors ';
		$values["actors"] = '%'.$_GET['casting'].'%';
	}
	if (!empty($_GET['year'])){
		$sql .= ' AND year =:year ';
		$values["year"] = $_GET['year'];
	}
	if (!empty($_GET['director'])){
		$sql .= ' AND directors LIKE :directors ';
		$values["director"] = '%'.$_GET['director'].'%';
	}
	if (!empty($_GET['genre'])){
		$sql .= ' AND genres LIKE :genre ';
		$values["genre"] = '%'.$_GET['genre'].'%';
	}

	// On prepare la requete PDO
	$query = $db->prepare($sql);

	// On crée les liens de la requete
	foreach($values as $key => $value){
		// Par defaut on bindValue sur un type STRING
		$type = PDO:: PARAM_STR;
		// Si la valeur est un nombre
		if (is_numeric($value)){
			// On type en INT
			$type = PDO:: PARAM_INT;
		}
		$query->bindValue($key, $value, $type);
	}

	// on execute la requete et on raméne tout les données
	$query->execute();
	$search_results = $query->fetchAll();
} /*else{
	$search_results=array();
}*/

if(isset($search_results)){

	$count_results = count($search_results);
	if ($count_results > 0) {
			echo '<h3>'.$count_results.' résultat(s)';

			if (!empty($search)) {
				echo 'Aucun resultat pour la recherche"'.$search.' "';			
			}
			echo "</h3>";
			echo '<br />';

			echo'<div class ="search_results list-group">';
				foreach ($search_results as $search_result) {?>
					<a href="movie.php?id=<?= $search_result['id'] ?>" class="list-group-item">
					<img height="50" src="<?= getCover($search_result['id']) ?>" align="left">
					<h4 class="list-group-item-heading"><?= $search_result['title'] ?> (<?= $search_result['year'] ?>)</h4>
					<p class="list-group-item-text">&nbsp;</p>
				</a>
					
			<?php 
			}

			echo '</div>';

		}else {?>
			 <h3>Aucun résultat pour la recherche <?php if (!empty($search)) {
				echo ' "'.$search.'" ';}?></h3>			

		<?php }
	}


include_once 'footer.php'; 
?>