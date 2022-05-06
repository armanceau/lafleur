<?php

include 'connection.php';

session_start();

$sql = 'SELECT * FROM bon_de_reduction WHERE code_de_reduction ="'.$_REQUEST["code"].'"' ;
$table = $connection->query($sql);
$ligne = $table->fetch();

if (!empty($ligne)){
    if ($ligne['code_de_reduction'] == $_REQUEST['code']){
        $sql = 'INSERT INTO `utiliser`(`mail_login`, `code_de_reduction`) VALUES ("'.$_SESSION['login'].'","'.$_REQUEST['code'].'")';
        $connection->exec($sql);
    }

}

header('location: commande.php');

?>