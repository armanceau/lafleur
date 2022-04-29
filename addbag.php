<?php

include 'connection.php';

session_start();

$user = $_SESSION['login'];
$quantite = 0;
$ref = $_REQUEST['ref'];

$sql = "SELECT reference, quantite_d_article FROM pannier WHERE mail_login = '".$user."'
AND reference = '".$ref."'";
$table = $connection->query($sql);
echo $sql;

while ($ligne = $table->fetch()){

    if ($ligne['reference'] =$ref){
        $quantite = $ligne['quantite_d_article'] + 1;
    }
}

if ($quantite != 0){
    $sql = "UPDATE `pannier` SET `quantite_d_article`= ".$quantite."
    WHERE mail_login = '".$user."' AND reference = '".$ref."'";

}else {
    $quantite = 1;
    $sql = "INSERT INTO `pannier` (`mail_login`, `reference`, `quantite_d_article`)
    VALUES ('".$user."', '".$ref."', ".$quantite.")";
}

$connection->exec($sql);

header("location: afficher_panier.php");

?>