<?php


include 'connection.php';

$sql = "INSERT categorie VALUES ('".$_REQUEST["codeCategorie"]."','".$_REQUEST["nomCategorie"]."');";

$connection->exec($sql);


header("location: BackOffice.php");       
?>



