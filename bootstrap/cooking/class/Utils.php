<?php
class Utils{

/*****************************  Fonction pour renvoyer un extrait de text  *******************************/

	public static function cutstring($text, $max_length = 0, $end = '...')/* parametre par defaut*/{
		// Si le parametre $max_length est fourni
		if($max_length > 0 && strlen($text) > $max_length){
			$text= wordwrap($text, $max_length, '|'); //On insère une barre tout les X carracteres
			$text= explode('|', $text); // On construit un tableau avec les bout de chaine séparer par |
			return $text[0].$end;  //afficher le 1er element du tableau } les 3 points
		}
		return $text;// Si le parametre $max_length n'est pas fourni on retourne toute la chaine
	}

}