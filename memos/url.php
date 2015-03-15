<?php

/*
Pour passer un paramètre dans l'url :
On appelle la page dans le navigateur en rajoutant ?param=valeur après le .php
Exemple : http://localhost/monfichier.php?id=1

On réceptionne les paramètres d'url dans un tableau $_GET
$_GET : Tableau qui contient tout les paramètres présents dans la barre d'adresse
Exemple :
	page.php?id=99&test=2&check=1
	
	// On affiche les paramètres d'url
	print_r($_GET); // Affiche array('id' => '99', 'test' => '2', 'check' => '1')
*/

// On vérifie la présence du paramètre dans l'url
if (isset($_GET['id'])) {
	echo "La valeur existe, il y a un paramètre ?id= dans la barre d'adresse";
	// ATTENTION : Le paramètre peut être défini mais vide ou égal à 0
}

// On vérifie que le paramètre est présent et non vide
// RAPPEL : empty fait d'abord un isset
if (!empty($_GET['id'])) {
	echo "La valeur existe, il y a un paramètre ?id=... dans la barre d'adresse et il n'est ni vide ni égal à 0";
}

// On assigne la valeur du paramètre à une variable
$id = $_GET['id'];