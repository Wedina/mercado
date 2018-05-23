<?php
include '../services/tools.php';
include 'header.php';
include '../services/sql.php';



echo "<h1>" . "Page test COOKIE" . "</h1>";

SESSION_start();
// phpinfo();
$_SESSION['id'] = 4;




include 'footer.php';