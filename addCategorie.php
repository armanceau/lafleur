<?php


include 'connection.php';



$stmt = $connection->prepare("INSERT categorie VALUES (:codeCateg, :nomCateg)");
$stmt->bindParam(':nomCateg', $_REQUEST["nomCategorie"]);
$stmt->bindParam(':codeCateg', $_REQUEST["codeCategorie"]);


$stmt->execute();

header("location: BackOffice.php");       
?>



