<?php

/*************************************
*		CONNEXION BDD AVEC PDO		 *
*************************************/

// Domaine ou IP du serveur ou est située la base de données
define('HOST', 'localhost');
// Nom d'utilisateur autorisé à se connecter à la base
define('USER', 'root');
// Mot de passe de connexion à la base
define('PASS', '');
// Base de données sur laquelle on va faire les requêtes
define('DB', 'movies');

// Le bloc try test tout ce qui se situe à l'intérieur
try {

	// Tableau d'options pour la base de données
    $db_options = array(
    		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // On force l'encodage en utf8
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // On récupère tous les résultats en tableau associatif
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING // On affiche des warnings pour les erreurs, à commenter en prod
            );

    // On crée une connexion avec la base de données
    $db = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASS, $db_options);

// Si une erreur survient, on entre dans le bloc catch et on récupère l'erreur
} catch (Exception $e) {
	// On quitte l'execution du script en affichant le message d'erreur
    exit('MySQL Connect Error >> '.$e->getMessage());
}


/*************************************
*		  REQUETE SELECT PDO		 *
*************************************/

/*
    Requête sans paramètres donc sans bindValue
*/
// On commence par préparer la requête
    $query = $db->prepare('SELECT * FROM nom_de_la_table');
// On execute la requête
    $query->execute();
// On récupère toutes les lignes de résultat
    $result = $query->fetchAll();

/*
    Requête avec paramètres avec bindValue
*/

// On commence par préparer la requête
    $query = $db->prepare('SELECT colonne1, colonne2, colonne3 FROM nom_de_la_table WHERE colonne1 = :valeur1 AND colonne2 = :valeur2 AND colonne3 LIKE :valeur3');

// Pour chacune des variables précédées d'un : on doit faire un bindValue pour passer la valeur à la requête
    $query->bindValue('valeur1', 123, PDO::PARAM_INT);
    $query->bindValue('valeur2', 'toto', PDO::PARAM_STR);
    $query->bindValue('valeur3', '%blabla%', PDO::PARAM_STR);

// On execute la requête
    $query->execute();

// On récupère toutes les lignes de résultat
    $result = $query->fetchAll();

/*
    Requêtes de comptage de lignes
*/

// Rappel: On stock le résultat de COUNT(*) dans une colonne personnalisé count_total
    $query = $db->prepare('SELECT COUNT(*) as count_total FROM nom_de_la_table WHERE valeur1 = 123');
    $query->execute();
    $result = $query->fetch();
    $count_total = $result['count_total'];

// Si on veut compter ET utiliser le tableau qui contient les résultats de la requête
    $query = $db->prepare('SELECT * FROM nom_de_la_table WHERE valeur1 = 123');
    $query->execute();
    $results = $query->fetchAll();
// On utilise la fonction PHP count() pour compter le nombre d'éléments du tableau renvoyé par fetchAll()
    $count_total = count($results);
// PDO fourni également une fonction pour compter le nombre de lignes renvoyées par la requête
    $count_total = $query->rowCount();


/*************************************
*		  REQUETE INSERT PDO		 *
*************************************/

// On commence par préparer la requête
$query = $db->prepare('INSERT INTO nom_de_la_table (colonne1, colonne2, colonne3) VALUES (:valeur1, :valeur2, :valeur3)');
// Syntaxe alternative de la requête INSERT INTO
$query = $db->prepare('INSERT INTO nom_de_la_table SET colonne1 = :valeur1, colonne2 = :valeur2, colonne3 = :valeur3');

// Pour chacune des variables précédées d'un : on doit faire un bindValue pour passer la valeur à la requête
$query->bindValue('valeur1', 123, PDO::PARAM_INT);
$query->bindValue('valeur2', 'blabla', PDO::PARAM_STR);
$query->bindValue('valeur3', 'test', PDO::PARAM_STR);

// On execute la requête
$query->execute();

// On récupère le numéro de la ligne automatiquement généré par MySQL avec l'attribut AUTO_INCREMENT
$insert_id = $db->lastInsertId();

/*************************************
*		  REQUETE UPDATE PDO		 *
*************************************/

$query = $db->prepare('UPDATE nom_de_la_table SET colonne1 = :valeur1, colonne2 = :valeur2, colonne3 = :valeur3');

// Pour chacune des variables précédées d'un : on doit faire un bindValue pour passer la valeur à la requête
$query->bindValue('valeur1', 123, PDO::PARAM_INT);
$query->bindValue('valeur2', 'blabla', PDO::PARAM_STR);
$query->bindValue('valeur3', 'test', PDO::PARAM_STR);

// On execute la requête
$query->execute();

// On récupère le nombre de lignes affectées par la requête UPDATE
$affected_rows = $query->rowCount();

/*************************************
*		  REQUETE DELETE PDO		 *
*************************************/

$query = $db->prepare('DELETE FROM nom_de_la_table WHERE colonne1 = :valeur1');

// Pour chacune des variables précédées d'un : on doit faire un bindValue pour passer la valeur à la requête
$query->bindValue('valeur1', 123, PDO::PARAM_INT);

// On execute la requête
$query->execute();

// On récupère le nombre de lignes affectées par la requête DELETE
$affected_rows = $query->rowCount();