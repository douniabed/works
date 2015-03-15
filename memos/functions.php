<?php

// On défini une fonction avec un paramètre name
// Le paramètre name est facultatif
// On affecte une valeur par défaut à name s'il n'est pas fourni
function hello($name = '') {
	echo 'Hello '.$name.' !';
}

$name = 'Denis';

// Va afficher Hello Denis !
hello($name);
// Va afficher Hello John !
hello('John');
// Va afficher Hello Woo !
hello('Woo');
// Va afficher Hello !
hello();

function debug($array) {
	echo '<pre>';
	print_r($array);
	echo '</pre>';	
}

// Va afficher le tableau des paramètres d'url
debug($_GET);

// On vérifie que la fonction query existe
// Sinon on inclue le fichier qui contient la fonction query
if (!function_exists('query')) {
	require_once 'inc/db.php';
}