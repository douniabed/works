<?php
/*
$_SERVER['HTTP_REFEFER'] contient l'url de provenance, si on n'a pas tapé l'adresse dans la barre d'adresse
Si on vient de google ou d'un lien sur notre site, $_SERVER['HTTP_REFEFER'] contient l'url de la page depuis laquelle on est arrivé
*/

// Si on veut créer un lien retour sur une page
// On définit une provenance par defaut sur index.php
$origin = 'index.php';
// Si la page de provenance est définie
if (!empty($_SERVER['HTTP_REFEFER'])) {
	// On écrase la variable $origin avec la page de provenance définie dans $_SERVER['HTTP_REFEFER']
	$origin = $_SERVER['HTTP_REFEFER'];
}
echo $origin;