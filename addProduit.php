<?php

include 'connection.php';

$stmt = $connection->prepare("INSERT INTO produit VALUES (:referenceProduit, :designationProduit,
 :photoProduit, :prixProduit, :quantite_stock_Produit, :code_categorie_Produit)");
$stmt->bindParam(':referenceProduit', $_REQUEST["referenceProduit"], PDO::PARAM_STR);
$stmt->bindParam(':designationProduit', $_REQUEST["designationProduit"], PDO::PARAM_STR);
$stmt->bindParam(':photoProduit', $_REQUEST["photoProduit"], PDO::PARAM_STR);
$stmt->bindParam(':prixProduit', $_REQUEST["prixProduit"],PDO::PARAM_STR);
$stmt->bindParam(':quantite_stock_Produit', $_REQUEST["quantite_stock_Produit"],PDO::PARAM_INT);
$stmt->bindParam(':code_categorie_Produit', $_REQUEST["code_categorie_Produit"],PDO::PARAM_STR);

$stmt->execute();


header("location: BackOffice.php");   

?>



