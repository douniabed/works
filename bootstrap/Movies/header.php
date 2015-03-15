<?php
require_once 'inc/db.php';
require_once 'inc/func.php';


//echo '<pre>';
//print_r($_SERVER);

//le fichier php actuel
$current_page = basename($_SERVER['PHP_SELF']);

// Le repertoire actuel
//$current_dir = dirname($_SERVER['PHP_SELF']);

$pages =array(
	'index.php' => 'Accueil',
	'news.php' => 'Actualités',
	'search.php' => 'Recherche',
	'contact.php' => 'Contact',
	);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movies</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

	<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Movies</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php foreach ($pages as $page_url => $page_name){ ?>
					<li <?= $page_url == $current_page? ' class="active"' :'' ?>><a href="<?= $page_url ?>"><?= $page_name ?></a></li>
					<?php } ?>	
				</ul>
				<form class="navbar-form navbar-right" action="search.php" method="GET">
					<div class="input-group">
						<input name="search" type="text" class="form-control" placeholder="Recherche rapide...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</nav>

	<div class="container">