<?php
include_once 'header.php';


try{
	$type = !empty($_GET['type']) ? intval($_GET['type']) : 0;
	if(empty($type)){
		throw new Exception("Parametre type invalide");
	}

	$recipes = Recipe::getListByType($type);
?>

	<h1>Les recettes de <?= Recipe::getTypeLabel($type) ?></h1>

<?php foreach ($recipes as $recipe) {?>
	<hr>

		<div class="media">
		  <div class="media-left">
		    <a href="recipe.php?id=<?= $recipe->getId() ?>">
		      <img class="media-object" src="<?= $recipe->getPicture() ?>" alt="recipe" height=100 width=100>
		    </a>
		  </div>
		  <div class="media-body">
		    <h4 class="media-heading"><?= $recipe->getTitle() ?></h4>

			<blockquote>
				<?= $recipe->getContent(100, '... <a href="recipe.php?id='.$recipe->getId().'">Lire la suite</a>')?>
			</blockquote>

		  </div>
		</div>
	<?php } ?>

<?php }

	catch(Exception $e){
	echo $e->getMessage();
}

include_once 'footer.php' ?>