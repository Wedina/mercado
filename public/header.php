
<?php
if (isset($_SESSION['iduser'])){
	$iduser = $_SESSION['iduser'];

	$bdd1 = new PDO('mysql:host=localhost;dbname=mercadolivre;charset=utf8', 'root', 'troiswa' );
    $sql = "SELECT * FROM user WHERE id=$iduser";	

    $statement = $bdd1->prepare($sql);
	$statement->execute();
	$user = $statement->fetch(\PDO::FETCH_ASSOC);

	

}else {
	echo "hors session";

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Banana STORE</title>
</head>
<body>
	<header>
		<p>
		<?php
		 if ($user == null){
			echo "hors session";
		} else {
			echo  "Bonjour " . $user['firstname'] . '<br>' . '<img src="'. $user["photo"].'"/>';
		}
		 ?>
		
			
		</p>
		<nav>
			<a href="index.php">accueil</a>
			<a href="#">produits</a>
			<a href="#">contact us</a>
			<a href="#">back</a>
			<a href="user.php">login</a>
			<a href="destroy.php">deconnecter</a>
		</nav>
	</header>
	<main>
