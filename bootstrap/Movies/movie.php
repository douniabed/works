<?php include_once 'header.php';


//si id est défini dans l'url
//if (!isset($GET['id']))
// Si id est défini et qu'il n'est pas vide et qu'il est superieure à 0 
if (empty($_GET['id'])){
	//On redirige vers index.php
	header('Location: index.php');
	exit();
}

$id = $_GET['id'];

//$search_movies = query("SELECT * FROM movies WHERE id=$id");

// Requete PDO
$query= $db->prepare('SELECT * FROM movies WHERE id = :id');
$query->bindValue('id', $id, PDO::PARAM_INT);
$query->execute();
$search_movies=$query->fetchAll();

if (empty($search_movies)){
	exit("Le film n'existe pas");
}

//on utilise la fonction mktime pour transformer en timestamp UNIX
$duration = mktime(0, $search_movies[0]['runtime']);

//on cherche à conaitre le nombre d'heure que cela contient
$duration_hours = intval(date('H', $duration ));

// On cherche à conaitre le nombre de minutes que cela contient
$duration_minutes = date('i', $duration );

/* D'une autre façon
$duration_hours = floor($search_movies[0]['runtime'] /60);
$duration_minutes = $search_movies[0]['runtime'] % 60;
*/
$genres = explode (', ' , $search_movies[0]['genres']);
$actors = explode (', ' , $search_movies[0]['cast']);
$directors = explode (', ' , $search_movies[0]['directors']);




//$related_movies_genre = query('SELECT id, title FROM movies WHERE genres LIKE "%'. $search_movies[0]['genres']. '%" AND id != '.$id.' LIMIT 5');

$query = $db-> prepare('SELECT id, title FROM movies WHERE genres LIKE :search_movies AND id != :id LIMIT 5');
$query-> bindValue('search_movies', '%'. $search_movies[0]['genres'].'%', PDO::PARAM_STR);
$query-> bindValue('id', $id, PDO::PARAM_INT);
$query-> execute();
$related_movies_genre=$query->fetchAll();




$related_movies_actors = query('SELECT id, title FROM movies WHERE cast LIKE "%'. $search_movies[0]['cast']. '%" AND id != '.$id.' LIMIT 5');
$related_movies_directors = query('SELECT id, title FROM movies WHERE directors LIKE "%'. $search_movies[0]['directors']. '%" AND id != '.$id.' LIMIT 5');


$from = 'index.php';
if(!empty($_SERVER['HTTP_REFERER'])){
	$from = $_SERVER['HTTP_REFERER'];
	}



 ?>

<a href="<?= $from ?>" class="btn btn-default" role="button">&laquo; Retour</a>

<hr>

<div class="row movie-container">
	<div class="col-xs-12 col-sm-9">

		<img src="<?= getCover($id)?>" align="left">

		<h2><?= $search_movies[0]['title'] ?></h2>

		<hr>

		<p><strong>Date de sortie :</strong> 09 février <?= $search_movies[0]['year'] ?> (<?= $duration_hours .'h'. $duration_minutes .'min'?></p>
		<p><strong>Genres :</strong>&nbsp
			<?php foreach ($genres as $genre){ ?>
				<a href="genre.php?genre=<?=$genre?>"><?=$genre ?> </a>
			<?php } ?> 
		</p>
		<p>
			<strong>Acteurs :</strong>&nbsp
			<?php foreach ($actors as $actor){ ?>
				<a href="actor.php?actor=<?=$actor?>"><?=$actor ?> </a>
			<?php } ?> 
		</p>
		<p><strong>Réalisateurs :</strong>&nbsp
			<?php foreach ($directors as $director){ ?>
				
				<a href="director.php?name=<?=$director ?>"><?=$director ?> </a>
			<?php } ?>  
		</p>
		<hr>
		<blockquote>
			<p><?= $search_movies[0]['plot'] ?></p></p>
		</blockquote>

	</div>

	<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

		<?= displayMovieList($related_movies_genre, 'Film du meme genre') ?>
		<?= displayMovieList($related_movies_actors, 'Film du meme acteurs') ?>
		<?= displayMovieList($related_movies_directors, 'Film du meme realisateurs') ?>

	</div>

</div>

<?php include_once 'footer.php'; ?>