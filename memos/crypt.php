<?php

/***************************************************
*		FONCTIONS DE CRYPTAGE pour PHP > 5.5       *
****************************************************/

$password = '123456';

// Crypt un mot de passe en utilisant l'algorithme Blowfish
$crypted_password = password_hash($password, PASSWORD_BCRYPT);

// Test si le mot de passe en clair est équivalent au mot de passe crypté
if (password_verify($password, $crypted_password)) {
	echo 'Le mot de passe est correct';
} else {
	echo 'Le mot de passe est incorrect';
}

// Calcul du cost idéal (nombre de tours pour crypter le mot de passe)

$timeTarget = 0.1; // 100 millisecondes, 1 dixième de seconde

$cost = 8;
do {
    $cost++;
    $start = microtime(true);
    password_hash("test", PASSWORD_BCRYPT, array("cost" => $cost));
    $end = microtime(true);
} while (($end - $start) < $timeTarget);

echo "Valeur de 'cost' la plus appropriée : " . $cost . "\n";

/***************************************************
*		     Pour PHP > 5.3.7 et < 5.5			   *
****************************************************/

// Il existe un github avec les fonctions ci-dessus (password_hash, password_verify..etc) :
// https://github.com/ircmaxell/password_compat
// Il suffit de télécharger le fichier lib/password.php et l'inclure

/***************************************************
*		     	  Pour PHP < 5.3.7			   	   *
****************************************************/

if (!function_exists('password_hash')) {
	function password_hash($pass, $algo = 1, $options = array()) {

		$rounds = !empty($options['cost']) ? $options['cost'] : 8;

		$salt = '';

		$letters_lowercase = range('a', 'z');
		$letters_uppercase = range('A', 'Z');
		$numbers = range(0, 9);

		$salt_chars = array_merge($letters_lowercase, $letters_uppercase, $numbers);

		for($i = 0; $i < 22; $i++) {
			$salt .= $salt_chars[array_rand($salt_chars)];
		}
		return crypt($pass, sprintf('$2y$%02d$', $rounds). $salt);
	}
}

if (!function_exists('password_verify')) {
	function password_verify($pass, $crypted_password) {
		return hash_equals($pass, crypt($pass, $crypted_password));
	}
}

// Usage : même utilisation qu'avec les fonctions PHP > 5.5