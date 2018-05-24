<?php 
session_start();
include '../services/tools.php';
include 'header.php';
include '../services/sql.php';
?>

<h1>Produit</h1>

<?php
if (isset($_GET['id'])) {
	$productId = $_GET['id'];
	$bdd2 = new PDO('mysql:host=localhost;dbname=mercadolivre;charset=utf8', 'root', 'troiswa' );
	$sql = "SELECT * FROM product WHERE id= $productId";
	$statement = $bdd2->prepare($sql);
	$statement->execute();
	$produit = $statement->fetch(\PDO::FETCH_ASSOC);	
}
?>

<div class="left">
	<div><img id="produit"  src="<?= $produit['photo'] ?> "></div>
	<div class="right">
		<ul>
			<li><?= ($produit['name']) ?></li>
			<li><?= ($produit['price']) ?> £</li>
			<li><?= ($produit['description']) ?></li>
			<li>  stock <?= ($produit['quantity']) ?></li>
		</ul>
	</div>
</div>

<a class="ajouter" >Ajouter</a>

<?php
include 'footer.php';
?>