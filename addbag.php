<?php


$sql = "INSERT INTO `pannier`(`mail_login`, `reference`, `quantite_d_article`)
VALUES (".$_SESSION['login'].",".$_REQUEST["ref"].",1)";

header("location: panier.php");

?>