<?php include_once 'header.php';
require_once 'db.php';

// On créée une requete qui recupere un post au hasard

$query = $db->query('SELECT * FROM joies ORDER BY RAND() LIMIT 1');
$query->execute();
$rand_post =$query->fetch();

?>

	<h1>Une Joie du code au hasard</h1>

	<hr>

	<?php echo  displayPost($rand_post);

include_once 'footer.php'; ?>