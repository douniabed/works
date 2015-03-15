<?php

function getCover($id = 0) {
	if (!empty($id)) {
		$cover = 'posters/'.$id.'.jpg';
		if (file_exists($cover)) {			
			return $cover;
		}
	}
	return 'img/cover.png';
}

/*
	Fonction qui affiche un panneau avec un titre, 
	une liste de films et une class css pour la couleur
*/
function displayMovieList($list, $title = '', $class = 'default', $url = 'movie.php') {
	return displayList($list, $title, $class, $url);
}

function displayList($list, $title = '', $class = 'default', $url = '') {

	// Si le tableau est vide on retourne une chaine vide
	if (empty($list)) {
		return '';
	}

	// On remplit une variable html avec des div
	$html = '<div class="panel panel-'.$class.'">
				<div class="panel-heading">'.$title.'</div>
				<div class="list-group">';

			// Pour chacun des films qu'on reçoit
			foreach ($list as $rank => $row) {
				// On ajoute a notre variable html une balise a avec les infos du film
				$html .= '<a href="'.$url.'?id='.$row['id'].'" class="list-group-item">'.($rank + 1).' - '.$row['title'].'</a>';	
			}

	// On finit de remplir html avec les balises de fermeture de div
	$html .= '	</div>
			</div>';

	// On renvoit la variable pour l'afficher
	return $html;
}

