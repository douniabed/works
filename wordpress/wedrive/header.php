<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="header">
			<div class="container">
				<h1 id="logo">WeDrive</h1>
				<nav id="nav">
					<?php wp_nav_menu(array(
						"menu" => "nav_haut"
					)); ?>
				</nav>
				<a id="cnx">Connexion Inscription</a>
			</div>
		</header>
		<main id="main">
			<div class="container">
				<nav id="navBlog">
					<ul id="navBlogMenu">
						<li><a>Catégorie 1</a></li>
						<li><a>Catégorie 2</a></li>
						<li><a>Catégorie 3</a></li>
						<li><a>Catégorie 4</a></li>
					</ul>
					<form id="search">
						<input id="s" type="text" placeholder="Recherche" name="s">
						<input id="searchsubmit" type="submit" value="">
					</form>
				</nav>