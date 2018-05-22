<?php
include '../services/tools.php';
include 'header.php';
include '../services/sql.php';
?>

<h3>Veuillez remplir le formulaire</h3>

<form action="" method="post">
	<label>ID</label>
	<input type="text" name="id">
	<label>mail.@</label>
	<input type="mail" name="mail">
	<label>Prenon</label>
	<input type="text" name="firstname">
	<label>Non</label>
	<input type="text" name="lastname">
</form>


<?php
include 'footer.php';

?>