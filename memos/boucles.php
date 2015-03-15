<?php

// Boucle de 0 à 9 par pas de 1
// Tant que $i est inférieur à 10, on ajoute 1 et on rentre dans la boucle
// Va afficher 0123456789
for ($i = 0; $i < 10; $i++) {
	echo $i;
}

/*
	On boucle dans l'autre sens
	Tant que $year est supérieur ou égal à 1900 on retire 1
	Va afficher :
	2015<br />
	2014<br />
	2013<br />
	...
	1900<br />
*/
for ($year = 2015; $year >= 1900; $year--) {
	echo $year.'<br />';
}

$days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');

// On parcourt le tableau $days
// On affecte chaque valeur à une variable $day
// Va afficher : lundi, mardi, mercredi, ..., dimanche
foreach ($days as $day) {
	echo $day.', ';
}

// On défini un tableau avec clé => valeur
$infos = array(
	'name' => 'Nom',
	'title' => 'Mon titre',
	'valeur' => 10,
);

/*
	On parcourt notre tableau avec clé valeur
	Va afficher :
	name : Nom<br />
	title : Mon titre<br />
	valeur : 10<br />
*/
foreach ($infos as $key => $val) {
	echo $key.' : '.$val.'<br />';
}