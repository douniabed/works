<?php
/***********************
*  	     ARRAYS        *
***********************/

// On déclare un tableau
$jours = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');

// Equivalent à
$jours = array();
$jours[0] = 'lundi';
$jours[1] = 'mardi';
$jours[2] = 'mercredi';
// Etc...

$jours = array();
$jours[] = 'lundi';
$jours[] = 'mardi';
$jours[] = 'mercredi';
// Etc...

echo $jours[0]; // Affiche lundi
echo $jours[6]; // Affiche dimanche

// Tableau associatif clé => valeur
$jours = array(
	'monday'    => 'lundi',
	'tuesday'   => 'mardi',
	'wednesday' => 'mercredi',
	'thursday'  => 'jeudi',
	'friday'    => 'vendredi',
	'saturday'  => 'samedi',
	'sunday'    => 'dimanche'
    );

echo $jours['monday']; // Affiche lundi
echo $jours['saturday']; // Affiche samedi

echo '<pre>'; // Pour afficher le tableau proprement
print_r($jours); // Affiche tout le contenu du tableau

// $_GET est un array automatiquement créé par PHP
// avec les paramètres passés dans l'URL
// c.f memos/url.php

// $_POST est un array automatiquement créé par PHP
// quand on submit un formulaire avec une method POST
// c.f memos/form.php