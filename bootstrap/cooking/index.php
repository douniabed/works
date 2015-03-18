<?php include_once 'header.php';

try{

?>

	<div class="row">
		<div class="col-lg-4">
			<img class="img-circle" src="img/cake.png" alt="Les gateaux" width="140" height="140">
			<h2>Les gateaux</h2>
			<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
			<p><a class="btn btn-default" href="recipes.php?type=1" role="button">Voir les recettes &raquo;</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<img class="img-circle" src="img/burger.png" alt="La fast-food" width="140" height="140">
			<h2>La fast-food</h2>
			<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
			<p><a class="btn btn-default" href="recipes.php?type=2" role="button">Voir les recettes &raquo;</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<img class="img-circle" src="img/soup.png" alt="Les soupes" width="128" height="128">
			<h2>Les soupes</h2>
			<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p><a class="btn btn-default" href="recipes.php?type=3" role="button">Voir les recettes &raquo;</a></p>
		</div><!-- /.col-lg-4 -->
	</div><!-- /.row -->

	<?php
	$recipes = Recipe::getList(3, 'date DESC');

	foreach ($recipes as $recipe) {?>

	<hr class="featurette-divider">

	<div class="row featurette">
		<div class="col-md-7">
			<h2 class="featurette-heading"><?= $recipe->getTitle() ?></h2>
			<p class="lead"><?= $recipe->getContent(100) ?></p>
			<a class="btn btn-primary" href="recipe.php?id=<?= $recipe->getId()?>" role="button">Voir la recette &raquo;</a>
		</div>
		<div class="col-md-5">
			<img class="featurette-image img-responsive center-block" src="<?= $recipe->getPicture()?>" height="333" width="500" alt="">
		</div>
	</div>
	<?php } ?>

<?php }

	catch(Exception $e){
	echo $e->getMessage();
}
include_once 'footer.php' ?>