<?php


include 'connection.php';



$stmt = $bdh->prepare("INSERT categorie VALUES (:codeCateg, :nomCateg)");
$stmt->bindParam(':nomCateg', $nomCateg);
$stmt->bindParam(':codeCateg', $codeCateg);

$nomCateg = $_REQUEST["nomCategorie"];
$codeCateg = $_REQUEST["codeCategorie"];

$stmt->execute();

header("location: BackOffice.php");       
?>



