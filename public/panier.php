<?php


$panier = [];
$panier[0] = "page test";

var_dump($panier);


 function add($value){
 	$panier.push($value);
 	return $panier;	     
}

add('paula');

var_dump($panier);

?>