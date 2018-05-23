<?php
session_start();

include '../services/sql.php';
include '../services/tools.php';
include 'header.php';
?>

<h2>Me connecter</h2>



<form class="form" action="register.php" method="POST">
	
	<label>mail.@</label>
	<input type="mail" name="mail">
	<label>mot de passe</label>
	<input type="password" name="password">
	<button>valider</button>
	
</form>


<?php
include 'footer.php';

?>