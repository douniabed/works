<?php


/***********************
*  	      UTILS        *
***********************/

$ma_variable = 'Hello World !';

	// Retourne la longueur d'une chaine
	$longueur_chaine = strlen($ma_variable) // Retourne 13

	// Transforme une chaine en majuscules
	$chaine_majuscule = strtoupper($ma_variable) // Retourne HELLO WORLD !

	// Transforme une chaine en minuscules
	$chaine_minuscule = strtolower($ma_variable) // Retourne hello world !


	// Remplace des caractères ou des mots dans une chaine
	$bonjour_world = str_replace('Hello', 'Bonjour', $ma_variable); // Remplace Hello par Bonjour sur $ma_variable
	echo $bonjour_world; // Affiche Bonjour World !

	$hello = str_replace('world', '', $ma_variable); // Remplace world par une chaine vide sur $ma_variable
	echo $hello; // Affiche Hello !

	$hella_warld = str_replace('o', 'a', $ma_variable); // Remplace tous les o par des a sur $ma_variable
	echo $hella_warld; // Affiche Hella Warld !


$ma_variable_avec_du_html = '<a href="">Hello <strong>World</strong> !</a>';

	// Supprime toutes les balises html d'une chaine
	$ma_variable_sans_html = strip_tags($ma_variable_avec_du_html); // Retourne Hello World !

$ma_variable = "<a href="">c'est l'été !</a>";

	// Convertit tous les caractères spéciaux en entités html
	echo htmlentities($ma_variable_avec_du_html); // Affiche &lt;a href=&quot;&quot;&gt;c'est l'&eacute;t&eacute; !&lt;/a&gt;

	// Meme chose que htmlentities mais ne remplace que les caractères suivants : & " ' < >
	echo htmlspecialchars($ma_variable_avec_du_html); // Affiche &lt;a href=&quot;&quot;&gt;c'est l'été !&lt;/a&gt;


$actors_string = 'Brad Pitt, George Clooney, Matt Damon';

// On scinde notre chaine sur un séparateur
// Et on répartit chaque bout dans un tableau
$actors_array = explode(', ', $actors_string);

// Affiche Array ( [0] => Brad Pitt [1] => George Clooney [2] => Matt Damon )
print_r($actors_array);

// On a une chaine avec des sauts de ligne
$mon_texte = "Lorem
Ipsum
Toto
";

// On convertit tous les sauts de ligne par des balises <br />
$mon_texte = nl2br($mon_texte);

/* Affiche :
	Lorem<br />
	Ipsum<br />
	Toto<br />
*/
echo $mon_texte;