<?php



$bdd = new PDO('mysql:host=localhost;dbname=mercadolivre;charset=utf8', 'root', 'troiswa' );
// $bdd->exec('SET NAMES UTF8');


if (isset($_GET['word'])) {
	$word = $_GET['word'];

	$sql = "SELECT * FROM product WHERE name LIKE '%$word%'";
	
} else {
	$sql = 'SELECT * FROM product';
}

$reponse = $bdd->query($sql);

while ( $donnees = $reponse->fetch()) {	
	$list[] = $donnees;
}






?>
























<!-- https://github.com/goldopuk/3wa-todo

https://realtimeboard.com/app/board/o9J_k0PHEMg=/

https://wireframepro.mockflow.com/view/Mbc070796c00ff6b9d1a21957fcbf89861526638255516

https://github.com/goldopuk/3xa-arena
https://github.com/goldopuk/3wa-bananastore -->