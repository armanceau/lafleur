<?php


include 'connection.php';

$stmt = $connection->prepare("INSERT produit VALUES (:referenceProduit, :designationProduit,
 :photoProduit, :prixProduit, :quantite_stock_Produit, :code_categorie_Produit)");
$stmt->bindParam(':referenceProduit', $_REQUEST["referenceProduit"]);
$stmt->bindParam(':designationProduit', $_REQUEST["designationProduit"]);
$stmt->bindParam(':photoProduit', $_REQUEST["nomCategorie"]);
$stmt->bindParam(':prixProduit', $_REQUEST["nomCategorie"]);
$stmt->bindParam(':quantite_stock_Produit', $_REQUEST["nomCategorie"]);
$stmt->bindParam(':code_categorie_Produit', $_REQUEST["nomCategorie"]);

$connection->exec($sql);


header("location: BackOffice.php");       
?>



$nomCateg = $_REQUEST["nomCategorie"];
$codeCateg = $_REQUEST["codeCategorie"];

$stmt = $connection->prepare("INSERT categorie VALUES (:codeCateg, :nomCateg)");
$stmt->bindParam(':nomCateg', $nomCateg);
$stmt->bindParam(':codeCateg', $codeCateg);


$stmt->execute();

$stmt = $connection->prepare("INSERT categorie VALUES (:codeCateg, :nomCateg)");
$stmt->bindParam(':nomCateg', $_REQUEST["nomCategorie"]);
$stmt->bindParam(':codeCateg', $_REQUEST["codeCategorie"]);