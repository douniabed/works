<?php


/***********************
*  	   CONDITIONS      *
***********************/

$age = 18;

if ($age < 18) {
	echo 'Le visiteur est mineur';
} else if ($age >= 18 && $age < 21) {
	echo 'Le visiteur est majeur en France mais pas aux Etats Unis';
} else {
	echo 'Le visiteur est majeur dans tous les pays';
}

//if ($age <= 0 || $age >= 120) {
if ($age <= 0 OR $age >= 120) { // OR = ||
	echo "L'age semble invalide";
}
// Equivalent du test ci-dessus en if ternaire
echo $age <= 0 OR $age >= 120 ? "L'age semble invalide" : "";

//if ($age >= 18 && $age < 21) {
if ($age >= 18 AND $age < 21) { // AND = &&
	echo '...';
}
// Equivalent du test ci-dessus en if ternaire
echo $age >= 18 AND $age < 21 ? '...' : '';

$jour = 'mardi';
// Bloc switch/case équivalent à if/else if/else
switch($jour) {
	case 'lundi':
	case 'mardi':
	case 'mercredi':
	case 'jeudi':
	case 'vendredi':
		echo 'Jour ouvré, on bosse !';
	break;

	case 'samedi':
	case 'dimanche':
		echo "C'est le Week end !";
	break;

	default:
		echo 'Jour invalide...';
	break;
}

// Le bloc if/else if/else est équivalent au bloc switch/case ci-dessus
if ($jour == 'lundi' OR $jour == 'mardi' OR $jour == 'mercredi' OR $jour == 'jeudi' OR $jour == 'vendredi') {
	echo 'Jour ouvré, on bosse !';
} else if ($jour == 'samedi' OR $jour == 'dimanche') {
	echo "C'est le week end !";
} else {
	echo 'Jour invalide...';
}

/***********************
*  	     CHECKS        *
***********************/

if (isset($_GET['id'])) {
	echo "Il y a un paramètre du type ?id= dans la barre d'adresse";
	// ATTENTION : Le paramètre peut être défini mais vide ou égal à 0
}
// Il y a un paramètre du type ?id= dans la barre d'adresse et il n'est ni vide ni égal à 0
$id = '';
if (!empty($_GET['id'])) {
	$id = $_GET['id'];
}
// Equivalent des 3 lignes ci-dessus en if ternaire
$id = !empty($_GET['id']) ? $_GET['id'] : '';

if (isset($_POST['name'])) {
	echo "Il y a un champ name dans le formulaire qui a été posté";
	// ATTENTION : Le champ peut être défini mais vide ou égal à 0
}

// Il y a un champ name dans le formulaire qui a été posté il n'est ni vide ni égal à 0
$name = '';
if (!empty($_POST['name'])) {
	$name = $_POST['name'];
}
// Equivalent des 3 lignes ci-dessus en if ternaire
$name = !empty($_POST['name']) ? $_POST['name'] : '';


/***********************
*  IF TERNAIRE/RAPIDE  *
***********************/

// $variable = condition ? 'valeur si oui/true' : 'valeur si non/false';
/*
On pourrait le lire :
$variable = if !empty($_POST['variable']) { $_POST['variable'] } else { '' };
*/
$variable = !empty($_POST['variable']) ? $_POST['variable'] : '';
// On peut combiner des conditions
$variable = !empty($_POST['variable']) && $_POST['variable'] == 'valeur' ? $_POST['variable'] : '';

// If ternaire condition ? si oui : si non
$allowed_access = $age > 18 ? true : false;
// If ternaire condition concaténé dans un echo
echo 'Le visiteur est '. ($age > 18 ? 'majeur' : 'mineur');