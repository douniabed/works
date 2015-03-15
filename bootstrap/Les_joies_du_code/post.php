<?php include_once 'header.php';
require_once 'db.php';

if(!empty($_GET['id'])){
	$id = $_GET['id'];

	// Requete pour recuperer le post plus long
	$query = $db-> prepare('SELECT * FROM joies WHERE id= :id');
	$query -> bindValue('id', $id, PDO::PARAM_INT);
	$query->execute();
	$post = $query->fetch();

}
else if(!empty($_GET['supprimer'])){
	$id = $_GET['supprimer'];

	$query =$db->prepare('DELETE FROM joies WHERE id= :id');
	$query -> bindValue('id', $id, PDO::PARAM_INT);
	$query->execute();

	echo '<h1> Votre post a étè supprimé</h1>';
	exit();
}
else if(!empty($_GET['modifier'])){
	$id = $_GET['modifier'];

	header ("location:send.php?id=$id");

	exit();
}
?>
	<h1>Plus de détails</h1>

		<hr>

		<?=displayPost($post, 0) ?>

		<form action="post.php" method="GET">
			<input type="submit" value="supprimer">
			<input type="hidden" name="supprimer" value="<?= $post['id']?>">

			<a href="send.php?id=<?= $post['id']?>">modifier</a>
		</form>

<?php include_once 'footer.php';?>