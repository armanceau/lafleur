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

if (isset($quantite)){
    $sql = "UPDATE `pannier` SET `quantite_d_article`= ".$quantite."
    WHERE mail_login = '".$user."' AND reference = '".$ref."'";
    $connection->exec($sql);
}


header("location: afficher_panier.php");

?>