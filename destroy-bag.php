<?php

include "connection.php";

session_start();

$sql = "DELETE FROM `pannier` WHERE mail_login = '".$_SESSION['login']."' AND reference = '".$_REQUEST['ref']."'";
$connection->exec($sql);
header("location: afficher_panier.php");

?>