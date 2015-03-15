<?php 

include_once 'header.php';

//$rand_movies = query('SELECT id, title, year, plot FROM movies ORDER BY RAND() LIMIT 3');

// Requete PDO
$query = $db->query('SELECT id, title, year, plot FROM movies ORDER BY RAND() LIMIT 3');
$rand_movies =$query->fetchAll();

//$top_movies = query('SELECT id, title, year, plot FROM movies WHERE year >= 2000 ORDER BY rating DESC  LIMIT 8');

// Requete PDO
$query= $db->query('SELECT id, title, year, plot FROM movies WHERE year >= 2000 ORDER BY rating DESC  LIMIT 8');
$top_movies=$query->fetchAll();

?>

	<div class="row">

		<div class="col-xs-12 col-sm-9">
			<div class="jumbotron">
				<h1>Bienvenue sur Movies !</h1>
				<p>Le site n°1 du cinéma.<br />
				Découvrez notre <a href="search.php">recherche</a> de films et des <a href="news.php">actualités</a> sur le cinéma.
				</p>
			</div>

			<div class="row marketing">
				
				<?php foreach ($rand_movies as $rand_movie) { ?>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<img class="movie-thumbnail" src="<?= getCover($rand_movie['id'])?>" />
					<div class="caption">
						<h2><?= $rand_movie['title'] ?></h2>
						<p><?= $rand_movie['plot'] ?></p>
						<p><a class="btn btn-default" href="movie.php?id=<?= $rand_movie['id'] ?>" role="button">Voir la fiche du film &raquo;</a></p>
					</div>
				</div>
				<?php } ?>



			</div>

			<hr>

			<div id="top-movies" class="row">
			/<!--Sur la home remplacer les 4 blocs de films par 8 films issus de la table movies-->
				<?php foreach ($top_movies as $top_movie){ ?>
				<div class="top-movie col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="thumbnail">
						<img src="<?= getCover($top_movie['id'])?>" />
						<div class="caption">
							<h2><?= $top_movie['title'] ?></h2>
							<p><?= $top_movie['plot'] ?></p>
							<p><a class="btn btn-default" href="movie.php?id=<?= $top_movie['id'] ?>" role="button">Voir la fiche du film &raquo;</a></p>
						</div>
					</div>
				</div>
				<?php } ?>
				
			</div>
		</div>

		<?php include 'sidebar.php' ?>

	</div>

<?php include_once 'footer.php'; ?>