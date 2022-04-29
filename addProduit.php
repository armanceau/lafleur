<?php

include 'connection.php';

$stmt = $connection->prepare("INSERT INTO 'produit' VALUES (:referenceProduit, :designationProduit,
 :photoProduit, :prixProduit, :quantite_stock_Produit, :code_categorie_Produit)");
$stmt->bindParam(':referenceProduit', $_REQUEST["referenceProduit"]);
$stmt->bindParam(':designationProduit', $_REQUEST["designationProduit"]);
$stmt->bindParam(':photoProduit', $_REQUEST["photoProduit"]);
$stmt->bindParam(':prixProduit', $_REQUEST["prixProduit"]);
$stmt->bindParam(':quantite_stock_Produit', $_REQUEST["quantite_stock_Produit"]);
$stmt->bindParam(':code_categorie_Produit', $_REQUEST["code_categorie_Produit"]);

$connection->exec($sql);


header("location: BackOffice.php");       
?>



