<?php
session_start();


$mail = ($_POST['mail']);
$motDePasse = ($_POST['password']);


$bdd1 = new PDO('mysql:host=localhost;dbname=mercadolivre;charset=utf8', 'root', 'troiswa' );


$sql = "SELECT * FROM user WHERE email LIKE '$mail' AND password LIKE '$motDePasse' ";
// $donnees1 = $reponse1->fetch();



$statement = $bdd1->prepare($sql);
$statement->execute();
$user = $statement->fetch(\PDO::FETCH_ASSOC);



if ($user == null) {

	echo "mot de passe incorrect";

} else {
	$_SESSION['iduser'] = $user['id'];
	header('location: index.php');
}



