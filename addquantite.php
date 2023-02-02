<?php

include 'connection.php';

session_start();

$user = $_SESSION['login'];
$ref = $_REQUEST['ref'];

$sql = "SELECT quantite_d_article FROM pannier WHERE mail_login = '".$user."'
AND reference = '".$ref."'";
$table = $connection->query($sql);
echo $sql;

while ($ligne = $table->fetch()){

    $quantite = $ligne['quantite_d_article'] + 1;
}


$sql = "SELECT quantite_d_article FROM produit WHERE reference = '".$ref."'";

$table = $connection->query($sql);
echo $sql;

if (isset($quantite)){

    
}


header("location: afficher_panier.php");

?>