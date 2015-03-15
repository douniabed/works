<?php include_once 'header.php'; 
//On initialisr les variables
$error = array();
$lastname='';
$prenom = '';
$email = '';
$newsletter = 0; 


// On verifie que le formulaire n'est pas vide

if(!empty($_POST)){	

	// On recuprer les données par POST
	$lastname =  strip_tags($_POST['lastname']);
	$firstname =  strip_tags( $_POST['firstname']);
	$email =  strip_tags($_POST['email']);


	// On commence la validation 

	// Verifier que le nom n'est pas vide
	if(empty($lastname)){
		$error['lastname'] = "Veuillez entrer votre nom !";
	}
	// Verifier que le nom n'est pas trop court
	if(strlen($lastname) < 2){
		$error['lastname'] = "Votre nom est trop court !";
	}
	// Verifier que le prenom n'est pas vide
	if(empty($firstname)){
		$error['firstname'] = "Veuillez entrer votre prenom !";
	}
	// Verifier que le prenom n'est pas trop court
	if(strlen($firstname) < 2){
		$error['firstname'] = "Votre prenom est trop court !";
	}
	// Verifier que l'emil n'est pas vide
	if(empty($email)){
		$error['email'] = "Veuillez enter votre email !";
	}
	// si l'email est valider
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error["email"] = "Votre email n'est pas valide !";
	}

	// Verifier newsletter
	if(!empty($_POST['newsletter']) && $_POST['newsletter'] == 'on'){
	$newsletter = 1;
	}
	// Fin de validation

	// est-ce que tout est valide
	if(empty($error)){

		// Sauvegarder dans une base de donnée
		//$new_user = query("INSERT INTO contacts (user_lastname, user_firstname, user_email, user_newsletter) VALUES ('$lastname', '$firstname', '$email', $newsletter)");

		// Requete PDO
		$query = $db-> prepare ('INSERT INTO contacts (user_lastname, user_firstname, user_email, user_newsletter) VALUES (:lastname, :firstname, :email, :newsletter )');
		$query-> bindValue('lastname', $lastname ,PDO::PARAM_STR);
		$query-> bindValue('firstname', $firstname ,PDO::PARAM_STR);
		$query-> bindValue('email', $email ,PDO::PARAM_STR);
		$query-> bindValue('newsletter', $newsletter ,PDO::PARAM_INT);
		$query-> execute();
		$new_user = $db->lastInsertId();
	}
}

?>

<h1>Contact</h1>

<form class="form-horizontal" action="" method="POST" novalidate>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">Nom</label>
		<div class="col-sm-3">
			<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Nom">
		</div>
	</div>

	<?php if(!empty ($error ['lastname'])){ ?>
			<span class="error"><?php echo $error["lastname"]; ?></span>
	<?php } ?>

	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">Prénom</label>
		<div class="col-sm-3">
			<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Prénom">
		</div>
	</div>

	<?php if(!empty ($error ['firstname'])){ ?>
			<span class="error"><?php echo $error["firstname"]; ?></span>
	<?php } ?>

	<div class="form-group" >
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-5">
			<input type="email" id="email" name="email" class="form-control" placeholder="Email">
		</div>
	</div>
	
	<?php if(!empty ($error ['email'])){ ?>
			<span class="error"><?php echo $error["email"]; ?></span>
	<?php } ?>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
				<label>
					<input type="checkbox" name="newsletter"> S'abonner à la newsletter
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Envoyer</button>
		</div>
	</div>
</form>

<?php include_once 'footer.php'; ?>