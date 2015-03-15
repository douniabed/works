<?php

// Affiche la date courante au format 09-02-2015
echo date('d-m-Y');

// Affiche la date courante au format 2015/02/09
echo date('Y/m/d');

// Affiche la date et l'heure courante au format 09/02/2015 11:10:08
echo date('d/m/Y H:i:s');

$madate = '2015-02-11 16:10:15';

// On convertit une date déjà formatée en timestamp universel
$time = strtotime($madate);
// pour la reformatter avec la fonction date()
echo date('d/m/Y', $time);

//Calcul le timestamp de la veille
$yesterday = strtotime('-1 day');
// Affiche le timestamp avec un format
echo date('d-m-Y', $yesterday);

//Calcul le timestamp de la semaine dernière
$last_week = strtotime('-1 week');
// Affiche le timestamp avec un format
echo date('d/m/Y', $last_week);

//Calcul le timestamp du mois derniers
$last_month = strtotime('-1 month');
// Affiche la date et l'heure du mois dernier
echo date('d/m/Y H:i:s', $last_month);

// Faire un calcul sur une date déjà formattée (provenant de la base de données par exemple)
$madate = '2014-12-31 23:59:59';
$next_day = strtotime('-1 month', strtotime($madate));
// On affiche la date formattée
echo date('d/m/Y H:i:s', $next_day);