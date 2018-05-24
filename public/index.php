<?php
session_start();
include '../services/tools.php';
include 'header.php';
include '../services/sql.php';


?>
	<h1>Benvido no mercado livre</h1>

	<section>
		<article>
			<form action="index.php" method="get">
				<input type="search" name="word">
			</form>
			<button>Recherche</button>
		</article>
	</section>
	<section>
		<article>
			<h3>Loja azul</h3>
			<table>
				<tr class="tr">
					<td>Nom</td>
					<td>prix</td>
					<td>description</td>
					<td></td>
					<td>stock</td>
				</tr>
			<?php foreach ($list as $key): ?>
				<tr>
					<td><?= ($key[1]) ?></td>
					<td><?= ($key[2]) ?> £</td>
					<td><?= ($key[3]) ?></td>
					<td><a href="produit.php?id=<?php echo $key['id'] ?>"><img class="pic" src="<?= $key[4] ?>"></a></td>
					<td><?= ($key[5]) ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
		</article>	
	</section>
	<section>
		<h2>Ajouter un produit</h2>
		<article>
			<form action="index.php" method="post">
			<label>Nom</label>
			<input type="text" name="name">
			<label>Prix</label>
			<input type="number" name="price">
			<label>Description</label>
			<input type="text" name="description">
			<label>Image</label>
			<input type="url" name="url">
			</form>
		</article>	
	</section>
<?php
include 'footer.php';

?>