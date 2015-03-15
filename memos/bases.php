<?php

/*
Le code PHP est toujours placé dans un bloc <?php ?>
Ex: <?php echo 'Hello world !'; ?>

<?php echo peut être raccourci en <?=
Ex: <?= 'Hello world !' ?>
*/

// Affiche Hello world ! dans le navigateur
echo 'Hello world !';

$titre = 'Mon titre';
?>
<!-- Ecrire du php dans du html -->
<div class="titre"><?php echo $titre; ?></div>

<!-- Même chose version raccourcie -->
<div class="titre"><?= $titre ?></div>
<?php
// Ecrire du html dans du php avec la concaténation
echo '<div class="titre">'.$titre.'</div>';
// Entre double guillemets, remplace $titre la valeur de $titre
echo "<div class='titre'>$titre</div>";
// ATTENTION : Entre simple guillemets, écrit $titre PAS la valeur de $titre
echo '<div class="titre">$titre</div>'; 


/***********************
*  		VARIABLES      *
***********************/

// Nombres (int);
$age = 18;
$annee = 2015;

// Décimaux
$tva = 19.6;
$pi = 3.14;

// Booléens (bool)
$je_suis_un_humain = true; // vrai
$je_suis_un_animal = false; // faux

// Chaines / Textes (string)
$ma_variable = 'Valeur de ma variable'; // entre simples guillemets
$mon_texte = "Bla bla bla"; // entre doubles guillemets

/*
ATTENTION :

- Une variable php dans une chaine entourée de simples guillemets sera ignorée et son nom sera affiché
- Une variable php dans une chaine entourée de doubles guillemets sera interprêtée et sa valeur sera affichée
- Si on veut utiliser une variable php avec une chaine entourée de simples guillemets, il faut utiliser la concaténation

Exemples :
*/
$name = 'Bob';
echo 'Hello $name !'; // Va afficher Hello $name !
echo "Hello $name !"; // Va afficher Hello Bob !
echo 'Hello '.$name.' !'; // Va afficher Hello Bob !

/***********************
*  INCLUSIONS DE CODE  *
***********************/

// On insert ici le contenu de mon_fichier.php
include 'mon_fichier.php';

// Même chose qu'au dessus avec include
// Mais si le fichier n'existe pas on renvoit une erreur fatale qui bloque l'éxecution du script
require 'mon_fichier.php';

// Même chose qu'include mais une seule fois
// Les autres appels à include_once sur le même fichier seront ignorés
include_once 'mon_fichier.php';

// Même chose que require mais une seule fois
// Les autres appels à require_once sur le même fichier seront ignorés
require_once 'mon_fichier.php';


