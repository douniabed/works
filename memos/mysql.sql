-- Types de colonne | Longueur max. | Description
-- ---------------------------------------------------
-- INT 				| 11 			| nombre
-- CHAR 			| 255			| texte très court avec taille fixe
-- VARCHAR 			| 65 535		| texte très court, habituellement limité à 255
-- TEXT 			| 65 536		| texte court
-- MEDIUMTEXT 		| 16 777 216	| texte moyen (16 millions)
-- LONGTEXT 		| 4 294 967 296	| texte long (4 milliards)
-- DATETIME 		| -				| date et heure


/****************************************************
*	   	   LES REQUETES D'INSERTION		     	    *
****************************************************/

-- Insérer une ligne
INSERT INTO nom_de_la_table (colonne1, colonne2, colonne3) VALUES ('Valeur 1', 'Valeur 2', NOW());
-- NOW() = la date et l'heure courante

-- Insérer une ligne (syntaxe alternative)
INSERT INTO nom_de_la_table SET colonne1 = 'Valeur 1', colonne2 = 'Valeur 2', colonne3 = 123;


/****************************************************
*	   	   LES REQUETES DE MODIFICATION	     	    *
****************************************************/

-- Modifier une ligne
UPDATE nom_de_la_table SET colonne1 = 'Valeur modifiée' WHERE id = 1;


/****************************************************
*	   	   LES REQUETES DE SUPPRESION	     	    *
****************************************************/

-- Supprimer une ligne
DELETE FROM nom_de_la_table WHERE id = 1;


/****************************************************
*	   	   LES REQUETES DE RECUPERATION	     	    *
****************************************************/

-- Sélectionner toutes les lignes de la table (* pour remonter toutes les colonnes)
SELECT * FROM nom_de_la_table;

-- Sélectionner toutes les lignes de la table en spécifiant les colonnes à remonter
SELECT colonne1, colonne2 FROM nom_de_la_table;

-- Compte le nombre total de lignes renvoyées par la requête
SELECT COUNT(*) FROM nom_de_la_table;

-- Compte le nombre total de lignes, et renvoie le résultat dans un champ personnalisé count_total
SELECT COUNT(*) as count_total FROM nom_de_la_table;

-- Récupère une ligne au hasard dans la table
SELECT * FROM nom_de_la_table ORDER BY RAND() LIMIT 1;

-- Récupère 3 lignes au hasard dans la table
SELECT * FROM nom_de_la_table ORDER BY RAND() LIMIT 3;

/****************************************************
*		    	   LA CLAUSE WHERE		     	    *
*	Permet de filtrer les résultats de la requête   *
****************************************************/

-- Sélectionner des lignes avec un filtre strict sur une colonne
SELECT * FROM nom_de_la_table WHERE colonne1 = 'valeur de filtre';

-- Sélectionner des lignes avec un filtre approximatif sur une colonne
-- Toutes les lignes dont colonne1 commence par 'world'
SELECT * FROM nom_de_la_table WHERE colonne1 LIKE 'world%';
-- Toutes les lignes dont colonne1 finit par 'world'
SELECT * FROM nom_de_la_table WHERE colonne1 LIKE '%world';
-- Toutes les lignes dont colonne1 contient 'world'
SELECT * FROM nom_de_la_table WHERE colonne1 LIKE '%world%';

-- Sélectionner des lignes avec un filtre phonétique sur une colonne
SELECT * FROM nom_de_la_table WHERE colonne1 SOUNDS LIKE 'woorlde';

-- Sélectionner des lignes avec des conditions/filtres
SELECT * FROM nom_de_la_table WHERE colonne1 = 'filtre' AND colonne3 > 100;

-- Sélectionner des lignes avec plusieurs conditions/filtres possibles
SELECT * FROM nom_de_la_table WHERE id = 1 OR id = 2 OR id = 3;
-- Similaire à
SELECT * FROM nom_de_la_table WHERE id IN (1,2,3);


/****************************************************
*		    	   LA CLAUSE ORDER		     	    *
*			  Permet de trier/ordonner 				*
*			 les résultats de la requête   			*
****************************************************/

-- Tri les résultats de la requête par ordre croissant sur une colonne
SELECT * FROM nom_de_la_table ORDER BY colonne1 ASC;

-- Tri les résultats de la requête par ordre décroissant sur une colonne
SELECT * FROM nom_de_la_table ORDER BY colonne1 DESC;

-- Tri tous les films par ordre alphabétique sur le titre
SELECT * FROM movies ORDER BY title ASC;

-- Tri tous les films par ordre décroissant d'année de production
SELECT * FROM movies ORDER BY year DESC;


/****************************************************
*		    	   LA CLAUSE LIMIT		     	    *
*			    Permet de réduire les 				*
*			   résultats de la requête   			*
****************************************************/

-- Remonte seulement 5 lignes en partant de la ligne 0
-- Remonte les 5 premières lignes renvoyées par la requête
SELECT * FROM nom_de_la_table LIMIT 5;

-- Récupère les 10 lignes les plus récentes dans la table
-- On tri par date décroissante et on ne garde que les 10 premières lignes
SELECT * FROM nom_de_la_table ORDER BY creation_date DESC LIMIT 10;

-- Remonte 20 lignes en partant de la ligne 10
-- Autrement dit, remonte les lignes 10 à 30
SELECT * FROM nom_de_la_table LIMIT 10, 20;

-- Remonte 10 lignes en partant de la ligne 30
-- Autrement dit, remonte les lignes 30 à 40
SELECT * FROM nom_de_la_table LIMIT 30, 10;


/****************************************************
*		    	  REQUETE COMPLETE AVEC		     	*
*			    TOUTES LES CLAUSES COMBINEES	    *
****************************************************/

-- Remonte tous les films de l'année 2012, triés par titre alphabétique croissant, en ne gardant que 5 lignes
SELECT * FROM movies WHERE year = 2012 ORDER BY title ASC LIMIT 5;


/****************************************************
*		    	  FILTRE DE REQUETE 		     	*
*			         SUR LES DATES	                *
****************************************************/

-- On formatte la colonne pour qu'elle corresponde a la valeur qu'on test
-- On considère que le champ ma_date = 2014-12-31 15:00:00
SELECT * FROM nom_de_la_table WHERE DATE_FORMAT(ma_date, '%m-%Y') = '12-2014';

-- On retourne l'année et le mois d'une date donnée pour les tester séparemment
-- On considère que le champ ma_date = 2015-02-20 16:30:15
SELECT * FROM nom_de_la_table WHERE YEAR(ma_date) = '2015' AND MONTH(ma_date) = '02';


/****************************************************
*		    	   FONCTIONS MYSQL		     	    *
****************************************************/

-- Renvoie la valeur minimum/maximum de la colonne id parmi toutes les lignes
SELECT MIN(id) FROM nom_de_la_table;
SELECT MAX(id) FROM nom_de_la_table;

-- Calcul et renvoit la moyenne de la colonne scores pour toutes les lignes
SELECT AVG(scores) FROM nom_de_la_table;

-- Calcul et renvoit la somme de la colonne scores pour toutes les lignes
SELECT SUM(scores) FROM nom_de_la_table;