<?php

$titre = 'Mon titre';

// Ecrire du html dans du php
echo '<div class="titre">'.$titre.'</div>';
?>
<!-- Ecrire du php dans du html -->
<div class="titre"><?php echo $titre; ?></div>

<!-- Même chose version raccourcie -->
<div class="titre"><?= $titre ?></div>