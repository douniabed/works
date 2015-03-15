
<?php include_once 'header.php';
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	header("Location: article.php?id=$id");
	exit();
} 
else{
//$news = query ('SELECT * FROM news ORDER BY news_date DESC');

// Requete PDO
	$query= $db->query('SELECT * FROM news ORDER BY news_date DESC');
	$news = $query->fetchAll();

}

?>


<div class="news-container">

	<div class="news-header">
		<h1>Actualités</h1>
		<p>Découvrez toute l'actualité du cinéma</p>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-9">
			

		<?php 
		foreach($news as $new){ ?>

			
			<div class="news-post">
				<h2><a href ="article.php?id=<?= $new['news_id'] ?>" ><?= $new['news_title'] ?></a></h2>
				<p><?=  date('d-m-Y H:i:s', strtotime($new['news_date'])) ?> </p>

				<blockquote>
					<p>
					<?php
					// on supprime toutes les balises html de la chaine
		
					$short_news = strip_tags($new['news_text']);
					//On coupe la chaine et on garde les 200premiers caractere
					$short_news = substr($short_news,0, 150);
					// On convertit tout les sauts de lignes en <br />
					$short_news = nl2br($short_news);
					// On affiche
					echo $short_news .'...';
					?>
					</p>
					<a href ="article.php?id=<?= $new['news_id'] ?>" ><input type="submit" id="savoir" name= "name" value="En savoir plus ..."/></a>
				</blockquote>
				
			
			</div>
		<?php } ?>
		


		</div>  

		<?php include'sidebar_news.php'; ?>

	</div>
</div>

<?php include_once 'footer.php'; ?>