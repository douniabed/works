<?php

// Renvoie un tableau avec l'utilisation du CPU (processeur) pour les 1, 5 et 15 dernières minutes
// ATTENTION : Ne fonctionne pas sous windows :(
$cpu_usage = @sys_getloadavg();

// Renvoie la quantité de mémoire utilisée
$memory_usage = memory_get_usage();