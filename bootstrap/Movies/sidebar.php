<?php 


//On verifie que la fonction query existe
//Sinon on inclur le fichier qui contient la fonction query
if (!function_exists('query')){
	require_once 'inc/db.php';
}

$top_popularity_movies = query('SELECT id, title FROM movies ORDER BY popularity DESC LIMIT 5');
$most_recent_movies = query ('SELECT id, title FROM movies ORDER BY year DESC LIMIT 5');
$random_movies2 = query ('SELECT id, title FROM movies ORDER BY rand() LIMIT 5');
$most_recent_news = query('SELECT news_id as id, news_title as title  FROM news ORDER BY news_date DESC LIMIT 5');



?>


<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
	<?php		
			// On affiche 3 blocs 
			// - 1 bloc avec une class primary avec les 5 films les mieux classés
			// - 1 bloc avec une class info avec les 5 films les plus récents
			// - 1 bloc sans class avec 5 films au hasard			
			echo displayMovieList($top_popularity_movies, 'Les 5 films les mieux classés', 'primary');
			echo displayMovieList($most_recent_movies, 'Les 5 films les plus récents', 'info');
			echo displayMovieList($random_movies2, '5 films au hasard');
			echo displayList($most_recent_news, 'Les dernières actualités', 'warning', 'news.php');
			?>
			
</div>
