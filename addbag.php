<?php

include 'connection.php';

session_start();

$user = $_SESSION['login'];
$quantite = 0;
$ref = $_REQUEST['ref'];

$sql = "SELECT reference, quantite_d_article FROM pannier WHERE mail_login = '".$user."'
AND reference = '".$ref."'";
$table = $connection->query($sql);

while ($ligne = $table->fetch()){

    if ($ligne['reference'] =$ref){
        $quantite = $ligne['quantite_d_article'] + 1;
    }
}

if ($quantite != 0){
    $sql = "UPDATE `pannier` SET `quantite_d_article`= :quantite
    WHERE mail_login = ':user' AND reference = ':ref'";
    $sql_ready = $connection->prepare($sql);
    $sql_ready->bindParam(':user', $user, PDO::PARAM_STR);
    $sql_ready->bindParam(':ref', $ref, PDO::PARAM_STR);
    $sql_ready->bindParam(':quantite', $quantite, PDO::PARAM_INT);

}else {
    $quantite = 1;
    $sql = "INSERT INTO `pannier` (`mail_login`, `reference`, `quantite_d_article`)
    VALUES (':user', ':ref', :quantite)";
    $sql_ready = $connection->prepare($sql);
    $sql_ready->bindParam(':user', $user, PDO::PARAM_STR);
    $sql_ready->bindParam(':ref', $ref, PDO::PARAM_STR);
    $sql_ready->bindParam(':quantite', $quantite, PDO::PARAM_INT);
}

$sql_ready->execute();

var_dump($sql_ready);

//header("location: afficher_panier.php");

?>