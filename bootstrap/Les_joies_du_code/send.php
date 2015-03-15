<?php include_once 'header.php';
require_once 'db.php';


// Requete d'envoie de la JDC

// On verifie que le formulaire est remplie
if(!empty($_POST)){

	//On initialise la variable de error
	$error=false;

	//On initialise le tableau d'errors
	$errors=array();

	// On initialise les variables
	$auteur ='';
	$content = '';

	// On verifie que les champs sont bien remplies
	if(!empty(strip_tags($_POST['auteur']))){
		$auteur = strip_tags($_POST['auteur']);
	}else{
		//Si c'est vide on passe à la variable error
		$error=true;
		$errors['auteur']="Veuillez enter votre nom !";
	}

	if(!empty($_POST['content'])){
		$content = $_POST['content'];
	}else{
		//Si c'est vide on passe à la variable error
		$error=true;
		$errors['content']="Veuillez enter votre post !";
	}

	//S'il n'y a pas d'erreur on insere dans une base de donnée
	if($error ===false){
		$query = $db-> prepare('INSERT INTO joies (auteur, content) VALUE( :auteur, :content)');
		$query -> bindValue('auteur', $auteur, PDO::PARAM_STR);
		$query -> bindValue('content', $content, PDO::PARAM_STR);
		$query -> execute();
		$joie = $db->lastInsertId();
		if(!empty($joie)){
			echo '<h2> Votre joie a étè bien enregistré :) </h2>'; ?>
			<a href="<?= 'post.php?id='.$joie ?>">Voir la nouvelle joie</a>

			<?php exit();
		}
	 }
}
if(!empty($_GET['id'])){
	 	$value=true;
	 	$id= $_GET['id'];
		 	$query = $db-> prepare('SELECT * FROM joies WHERE id= :id');
			$query->bindValue('id', $id, PDO::PARAM_INT);
			$query->execute();
			$post=$query->fetch();
}

?>
	<h1>Envoyez votre Joie du code</h1>

	<hr>

	<form action="send.php" method="POST">
		<div class="form-group">
			<label for="name">Votre nom</label>
			<input type="text" class="form-control" name="auteur" id="auteur" value = "<?=!empty($post['auteur'])?$post['auteur']:'' ?>" placeholder="Entrez votre nom">



		</div>
		<div class="form-group">
			<label for="content">Votre Joie de code</label>
			<textarea name="content" id="content" class="form-control" rows="5" placeholder="Contenu de votre Joie de code"><?=!empty($post['content'])?$post['content']:'' ?></textarea>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>


<?php include_once 'footer.php'; ?>