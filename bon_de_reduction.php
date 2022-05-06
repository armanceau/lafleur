<?php

include 'connection.php';

session_start();

$sql = 'SELECT * FROM bon_de_reduction WHERE code_de_reduction ="'.$_REQUEST["code"].'"' ;
$table = $connection->query($sql);
$ligne = $table->fetch();

var_dump($ligne);

?>