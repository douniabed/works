<?php
include ('header.php');

if(!empty($_GET['genre'])){
	$genres = $_GET['genre'];


	//$movies_genres = query('SELECT * FROM movies WHERE genres LIKE "%'.$genres.'%"');	
	// Requete en PDO
	$query = $db-> prepare ('SELECT * FROM movies WHERE genres LIKE :genres');
	$query-> bindValue('genres', '%'.$genres.'%',PDO::PARAM_STR);
	$query-> execute();
	$movies_genres = $query->fetchAll();
}

$from = 'index.php';
if(!empty($_SERVER['HTTP_REFERER'])){
	$from = $_SERVER['HTTP_REFERER'];
	}

?>
<a href="<?= $from ?>" class="btn btn-default" role="button">&laquo; Retour</a><br/>


<?php
if(!empty($movies_genres)){?>
	<h2> <?= $genres ?></h2>
	<?php foreach ($movies_genres as $movies_genre) {?>
			<a href="movie.php?id=<?= $movies_genre['id']?>" ><?= $movies_genre['title'] ?></a><br />
	<?php }
 } 
include ('footer.php'); ?>
