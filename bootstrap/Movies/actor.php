<?php
include_once 'header.php';

if(!empty($_GET['actor'])){

	$cast = $_GET['actor'];

	//$actor_movies = query('SELECT * FROM movies where cast LIKE  "%'.$cast.'%"');

	// Requete en PDO
	$query = $db-> prepare ('SELECT * FROM movies WHERE cast LIKE :cast');
	$query-> bindValue('cast', '%'.$cast.'%',PDO::PARAM_STR);
	$query-> execute();
	$actor_movies = $query->fetchAll();

}

$from = 'index.php';
if(!empty($_SERVER['HTTP_REFERER'])){
	$from = $_SERVER['HTTP_REFERER'];
	}
?>
<a href="<?= $from ?>" class="btn btn-default" role="button">&laquo; Retour</a>

<hr>
<?php
if(!empty($actor_movies)){?> 
	<h2><?= $cast ?></h2>
	<?php
	foreach($actor_movies as $actor_movie){	?>
	<a href = "movie.php?id=<?= $actor_movie['id'] ?>"><?= $actor_movie['title'] ?></a><br />
		
	<?php }?>





<?php } ?>

<?php include_once 'footer.php'; ?>