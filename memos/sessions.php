<?php
// Déclare un nom de session qui sera utilisé par le session_start()
// Le cookie de session côté client sera créé avec ce nom
// A appeler systématiquement avant session_start()
// Si on appelle pas session_name() la session sera nommée PHPSESSID
session_name('nom_de_session');

// Démarre une session ou récupère une session déjà démarrée
// A placer au début de chaque page où on souhaite utiliser les sessions
session_start();

// Si on appelle session_name() sans argument, il retourne le nom de la session
$session_name = session_name();

// Crée une variable de session
// Le contenu du tableau $_SESSION sera disponible dans toutes les pages utilisant la session
$_SESSION['user_id'] = 123;

// Détruit une variable de session
unset($_SESSION['user_id']);


/*
Pour la déconnexion
*/

// Même pour détruire la session, il faut commencer par appeler session_start()
// Si on a nommé notre session, ne pas oublier d'appler le session_name() avant session_start()
session_name('nom_de_session');
session_start();



// Detruit toutes les variables de session
session_unset();
// Equivalent à écraser la superglobale $_SESSION avec un tableau vide
$_SESSION = array();

// Détruit la session côté serveur
session_destroy();

// Retourne tous les paramètres du cookie de session
$session_cookie_params = session_get_cookie_params();

// Affiche Array ( [lifetime] => 0 [path] => / [domain] => [secure] => [httponly] => )
print_r($session_cookie_params);

// Détruit le cookie de session côté client
setcookie(session_name(), false, time() - 1, '/');
// Détruit le cookie de session côté client en utilisant le chemin retourné par session_get_cookie_params()
setcookie(session_name(), false, time() - 1, $session_cookie_params['path']);