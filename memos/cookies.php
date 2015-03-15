<?php

$cookie_name = 'mon_cookie';
$cookie_value = 'last_visit='.time();
$cookie_expiration = time() + 60 * 60 * 24 * 7; // Expire dans 7 jours (7 * 24h * 60 min)
// Equivalent de l'expiration ci-dessus sans faire le calcul
$cookie_expiration = strtotime('+7 days');

// Crée un cookie sur le poste du client
setcookie($cookie_name, $cookie_value, $cookie_expiration);

// Crée un cookie avec une date d'expiration dans 12 heures
setcookie('mon_cookie', 'var=toto', strtotime('+12 hours'));

// Détruit un cookie en lui mettant une expiration dans le passé (3600 = 1h)
setcookie($cookie_name, $cookie_value, time() - 3600);

// Crée un cookie de session qui ne sera accessible/visible qu'à partir d'un certain répertoire
// $_COOKIE['mon_cookie'] sera visible dans le répertoire /website/path/ et tous ses sous-répertoires mais pas dans /website/
setcookie('mon_cookie', 'var=toto', strtotime('+30 days'), '/website/path/');