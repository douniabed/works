<?php
$month_labels = array(
	'january' => 'janvier',
	'february' => 'février',
	'march' => 'mars',
	'april' => 'avril',
	'may' => 'mai',
	'june' => 'juin',
	'july' => 'juillet',
	'august' => 'août',
	'september' => 'septembre',
	'october' => 'octobre',
	'november' => 'novembre',
	'december' => 'décembre'
);

$months = array();
for($i = 0; $i < 12; $i++) {

	// On calcul la date courante -X mois
	$time = strtotime('-'.$i.' month');

	// On formatte la valeur mois-année
	$month_value = date('m-Y', $time);
	
	// On récupère le nom du mois en anglais avec la 1ère lettre en majuscule
	// On le met en minuscule
	$month_label_en = strtolower(date('F', $time));
	// On va chercher le nom du mois en français
	// ucfirst : On met la 1ère lettre en majuscule
	$month_label_fr = ucfirst($month_labels[$month_label_en]);

	// On récupère l'année
	$year = date('Y', $time);

	$months[$month_value] = $month_label_fr.' '.$year;
}
?>
		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

			<div class="panel panel-default">
				<div class="panel-heading">Archives</div>
				<div class="panel-body">
					<ol class="list-unstyled">
						<?php foreach($months as $month_value => $month_label) { ?>
						<li><a href="news.php?date=<?= $month_value ?>"><?= $month_label ?></a></li>
						<?php } ?>
					</ol>
				</div>
			</div>

		</div>