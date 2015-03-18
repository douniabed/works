<?php include_once 'header.php';


try{
	$id = !empty($_GET['id']) ? intval($_GET['id']) : 0;
	if(empty($id)){
		throw new Exception("Parametre id invalide");
	}

	$recipe = Recipe::get($id);




?>

	<div class="media">
		<div class="media-left">
			<img src="<?= $recipe->getPicture() ?>" width=400 >
		</div>
		<div class="media-body">
			<h1><?= $recipe->getTitle() ?></h1>
			<em><?= $recipe->getDate('d-m-Y') ?></em>

			<hr>

			<h2>Ingrédients</h2>
			<p><?= $recipe->getIngredients() ?></p>

			<hr>
			<blockquote>
				<?= $recipe->getContent() ?>
			</blockquote>
		</div>
	</div>
<?php }

	catch(Exception $e){
	echo $e->getMessage();
}
include_once 'footer.php' ?>