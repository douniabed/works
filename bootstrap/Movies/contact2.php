<?php 
include_once 'header.php'; 

//print_r($_POST);

// Si on a soumis le formulaire en cliquant sur le bouton Envoyer

if (!empty($_POST)) {
	// On crée le tableau indiquant les spécificité des champs du formulaire que l'on recupere
	$fields = array(
		// tableau du 1er champ : "lastname"
		'lastname' => array(
			// On spécifie le type d'input
			'type' => 'text',
			// On spécifie le label
			'label' => 'Nom',
			//On spécifie si le champ est obligatoire
			'required' => true
		),
		'firstname'  => array(
			'type' => 'text',
			'label' => 'Prénom',
			'required' => true
		),
		'email'      => array(
			'type' => 'email',
			'label' => 'Email',
			'required' => true
		),
		'newsletter' => array(
			'type' => 'checkbox',
			'label' => "S'abonner à la newsletter",
			'required' => false
		),
		'cgu' => array(
			'type' => 'checkbox',
			'label' => "Accepter les CGU",
			'required' => true
		),
	);
	// On initialise une variable en indiquant s'il y'a une error dans le formulaire
	$error = false;
	// On initialise le tableau d'errors
	$errors = array();

	foreach($fields as $field_name => $field_infos) {

		// On initialise le nom du champ à vide
		$$field_name = '';
		if (!empty($_POST[$field_name])) {
			// On crée une variable qui aura pour label sa propre valeur: la valeur reçue en poste
			$$field_name = $_POST[$field_name];
		}
		//$$field_name = !empty($_POST[$field_name]) ? $_POST[$field_name] : '';

		// On recupere les infos envoyées par le formulaire et on le stocke dans des variables
		$type = $field_infos['type'];
		$label = $field_infos['label'];
		$required = $field_infos['required'];

		//On teste si tout les champs obligatoires on bien testé
		if ($required && empty($_POST[$field_name])) {
			// Si le champ est obligatoire et que nous n'avons pas récuperer de valeur on met notre variable error vrai
			$error = true;
			// On stocke le nom du champ dans notre tableau des errors 
			$errors[] = $field_name;
		}

		//echo 'Le champ '.$field.' est '.($required ? 'obligatoire' : 'pas obligatoire' ).'<br/>';
	}

	if ($error === false) {
		// Requete d'insertion
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
	
	<?php
	foreach($fields as $field_name => $field_infos) { 

		$type = $field_infos['type'];
		$label = $field_infos['label'];
		$required = $field_infos['required'];

		$hasError = in_array($field_name, $errors);

	?>
	<div class="form-group <?= $hasError ? 'has-error' : 'has-success' ?>">
		
		<?php if ($type == 'text' || $type == 'email') { ?>
		<label for="<?= $field_name ?>" class="col-sm-2 control-label"><?= $label ?></label>
		<div class="col-sm-3">
			<input type="<?= $type ?>" id="<?= $field_name ?>" name="<?= $field_name ?>" class="form-control" value="<?= $$field_name ?>" placeholder="<?= $label ?>">
		</div>
		<?php } ?>

		<?php if ($type == 'checkbox') { ?>
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox <?= $hasError ? 'has-error' : 'has-success' ?>">
				<label>
					<input type="<?= $type ?>" name="<?= $field_name ?>" <?= !empty($$field_name) ? 'checked' : '' ?>> <?= $label ?>
				</label>
			</div>
		</div>
		<?php } ?>

	</div>
	<?php } ?>

	<!--	
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">Nom</label>
		<div class="col-sm-3">
			<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Nom">
		</div>
	</div>

	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">Prénom</label>
		<div class="col-sm-3">
			<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Prénom">
		</div>
	</div>

	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-5">
			<input type="email" id="email" name="email" class="form-control" placeholder="Email">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
				<label>
					<input type="checkbox" name="newsletter" value="0"> S'abonner à la newsletter
				</label>
			</div>
		</div>
	</div>
	-->
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Envoyer</button>
		</div>
	</div>
</form>

<?php include_once 'footer.php'; ?>