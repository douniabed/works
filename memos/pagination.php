<?php

/*************************************
*		      PAGINATION		     *
*************************************/

// 1. On définit la page sur laquelle on se trouve, par défaut 0 si le paramètre ?page= est vide pas défini dans l'url
// 	  On force la variable page en chiffre avec intval(), si l'utilisateur passe du texte au paramètre ?page= il sera converti en 0
$page = !empty($_GET['page']) ? intval($_GET['page']) : 0;

// 2. On définit le nombre d'éléments à afficher sur chaque page
$nb_items_per_page = 10;

// 3. On construit une requête qui va chercher les éléments paginés avec LIMIT
$query = $db->prepare('SELECT * FROM nom_de_table LIMIT :start, :nb_items');
// On calcul le point de départ
// Ex: Sur la page 0 : 0 * 10 = 0, on part de la ligne 0
//     Sur la page 1 : 1 * 10 = 10, on part de la ligne 10
//     Sur la page 2 : 2 * 10 = 20, on part de la ligne 20
// 	   ...etc
$query->bindValue('start', $page * $nb_items_per_page, PDO::PARAM_INT);
// On va chercher 10 lignes
$query->bindValue('nb_items', $nb_items_per_page, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll();

// 4. On définit le nombre total d'éléments à paginer avec une requête SELECT COUNT() c.f. memos/pdo.php; memos/mysql.sql
//    On renvoit un nom de colonne personnalisé avec as count_total
$query = $db->prepare('SELECT COUNT(*) as count_total FROM nom_de_table');
$query->execute();
$result = $query->fetch();
// On va chercher en clé, le nom de colonne personnalisé renvoyé par le as, sinon on devrait aller chercher $result['COUNT(*)']
$count_total_items = $result['count_total'];

// 5. On calcul le nombre de pages pour construire les liens de pagination
//    On arrondit à l'entier supérieur avec ceil() pour gérer les pages restantes au delà de $count_total / $nb_items
//    Ex: 142 / 10 = 14.2; ceil(14.2) = 15; On affiche 14 pages avec 10 éléments + 1 page avec 2 éléments
$nb_pages = ceil($count_total_items / $nb_items_per_page);

// 6. On construit la liste des liens de pagination
for ($i = 0; $i < $nb_pages; $i++) {
	// Pour chaque lien, on transmet la page à un paramètre d'url ?page= (paramètre qu'on récupère à l'étape 1)
	// Et on affiche le numéro de la page + 1 pour démarrer à 1 et pas à 0
	echo '<a href="?page='.$i.'">'.$i + 1.'</a> ';
}