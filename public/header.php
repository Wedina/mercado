
<?php
if (isset($_SESSION['iduser'])){
	$iduser = $_SESSION['iduser'];

	$bdd1 = new PDO('mysql:host=localhost;dbname=mercadolivre;charset=utf8', 'root', 'troiswa' );
    $sql = "SELECT * FROM user WHERE id=$iduser";	

    $statement = $bdd1->prepare($sql);
	$statement->execute();
	$user = $statement->fetch(\PDO::FETCH_ASSOC);
}else {

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Banana STORE</title>
</head>
<body>
	<header>
		<p id="user">
		<?php
		 if ($user == null){
			echo "hors session";
		} else {
			echo  "Bonjour " . $user['firstname'] . '<br>' . '<img src="'. $user["photo"].'"/>';
		}
		 ?>	
		</p>
		<div class="clear"></div>
		<nav>
			<a href="index.php">accueil</a>
			<a href="produit.php">produits</a>
			<a href="user.php">login</a>
			
			<?php



			?>
			<a href="panier.php">Mon panier<?php echo " nb produits"; ?></a>
			<a id="deconnection" href="destroy.php">deconnecter</a>
			
		</nav>
	</header>
	<main>
