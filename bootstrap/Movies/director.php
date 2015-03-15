<?php
include_once 'header.php';

// On verifie qu'il ya un parametre dans l'url
if (!empty($_GET['name'])) {
	
	// Assigner à une variable $name
	$name=$_GET['name'];

	// On construit une requete
	//$movies_directors = query('SELECT * FROM movies WHERE directors LIKE "%'.$name.'%"');

	// ON construit la requete en PDO
	$query = $db -> prepare ('SELECT * FROM movies WHERE directors LIKE :name');
	$query->bindValue('name', '%'.$name.'%' , PDO::PARAM_STR);
	$query->execute();
    $movies_directors = $query->fetchAll();

}

$from = 'index.php';
if(!empty($_SERVER['HTTP_REFERER'])){
	$from = $_SERVER['HTTP_REFERER'];
	}
?>

<a href="<?= $from ?>" class="btn btn-default" role="button">&laquo; Retour</a>


<?php
if(!empty($movies_directors )){?>
	
	<h2> <?= $name ?></h2>
	<?php 
	foreach ($movies_directors  as $movies_director ) {?>
	<a href=" movie.php?id=<?= $movies_director['id'] ?>"><?= $movies_director['title'] ?></a><br />
		
	<?php } ?>

<?php } 

include_once 'footer.php';
?>