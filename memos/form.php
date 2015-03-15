
<?php

/*
$_POST : Tableau qui contient tous les paramètres via un formulaire en method POST
Exemple :
	<form action="form.php" method="POST">
		<input name="mon_champ" type="text">
		<button type="submit">
	</form>

	// Dans le fichier de destination form.php
	print_r($_POST); // Affiche array('mon_champ' => '...');
*/



if (isset($_POST['mon_champ'])) {
	echo 'On a posté un champ nommé "mon_champ" depuis le formulaire';
}

if (!empty($_POST['mon_champ'])) {
	echo "On vérifie que le POST contient un champ 'mon_champ' et qu'il n'est ni vide ni égal à 0";
	// On réceptionne le champ depuis le POST
	$mon_champ = $_POST['mon_champ'];
}
