<?php include_once 'header.php';
require_once 'db.php';

// On créée une requete qui recupere les 10derniere posts

$query = $db->prepare('SELECT * FROM joies ORDER BY date  DESC LIMIT 10 ');
$query-> execute();
$new_posts= $query -> fetchAll();

?>
	<h1>Les dernières Joies du code</h1>

	<hr>

		<?php foreach ($new_posts as $new_post) {
			  echo  displayPost($new_post);
		}



 include_once 'footer.php'; ?>