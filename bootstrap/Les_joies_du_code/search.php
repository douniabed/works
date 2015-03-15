<?php include_once 'header.php';
require_once 'db.php';

//Construire une requete pour recuperer un post qui contient la recherche demandé

if(empty($_GET['search'])){

	//Si on ne connait pas la page de provenace, on définit la provenace sur la home
	$from = 'index.php';
	// Si la page de provenance est définie
	if (!empty($_SERVER['HTTP_REFERER'])){
		// J'écrase le page de provenance
		$from = $_SERVER['HTTP_REFERER'];
	}

	header ('location:' .$from);
	exit();
}

	$search = $_GET['search'];

	$query=$db->prepare('SELECT * FROM joies WHERE  auteur LIKE :search OR content LIKE :search ORDER BY date DESC');
	$query -> bindValue('search','%'. $search .'%',PDO::PARAM_STR);
	$query -> execute();
	$search_posts =$query->fetchAll();


if(isset($search_posts)){

	$count_results = count($search_posts);
	if ($count_results > 0) {
			echo '<h1>'.$count_results.' résultat(s) pour la recherche "' .$search. '" </h1>'; ?>

			<hr>

			<?php foreach ($search_posts as $search_post) {
			  echo  displayPost($search_post);
			}
	 }
	else {
		echo '<h1>Aucun resultat pour la recherche "'.$search.' "</h1>';
	}
}


include_once 'footer.php'; ?>