<?php
include_once 'header.php';
if(!empty($_GET['id'])){

	$id =intval($_GET['id']);

	//$news = query ("SELECT * FROM news WHERE news_id =$id");

	// Requete faite par PDO
	$query = $db -> prepare ('SELECT * FROM news WHERE news_id = :news_id');
	$query->bindValue('news_id', $id, PDO::PARAM_INT);
	$query->execute();
    $news = $query->fetchAll();




	$news=$news[0];	
}
?>

<a href="news.php">&laquo; Retour</a>
<hr>

<?php
if (!empty($news)){ ?>
	
<div class="news-container">

<div class="row">
		<div class="col-xs-12 col-sm-9">
			<div class="news-post">
				<h2><?= $news['news_title'] ?></h2>
				<p><?=  date('d-m-Y H:i:s', strtotime($news['news_date'])) ?></p>

				<blockquote>
					<p>
					<?=nl2br($news['news_text']) ?>
					</p>
				</blockquote>
			</div>

		</div> 
	</div>

</div>


<?php } ?>

<?php include_once 'footer.php'; ?>