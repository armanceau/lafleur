<?php
    require 'connection.php';


    $stmt = $connection->prepare("UPDATE produit SET reference = ':newReference', designation = ':newDesignation', photo = ':newPhoto', prix = ':newPrix',
    quantite_en_stock = ':newQuantite', code_de_la_categorie = ':newCode' WHERE reference = ':ancienReference'");
    
    $stmt->bindParam(':newReference', $_REQUEST["newReference"], PDO::PARAM_STR);
    $stmt->bindParam(':newDesignation', $_REQUEST["newDesignation"], PDO::PARAM_STR);
    $stmt->bindParam(':newPhoto', $_REQUEST["newPhoto"], PDO::PARAM_STR);
    $stmt->bindParam(':newPrix', $_REQUEST["newPrix"], PDO::PARAM_INT);
    $stmt->bindParam(':newQuantite', $_REQUEST["newQuantite"], PDO::PARAM_INT);
    $stmt->bindParam(':newCode', $_REQUEST["code"], PDO::PARAM_STR);
    
    $stmt->bindParam(':ancienReference', $_REQUEST["ancienReference"], PDO::PARAM_STR);

    $estValide = $stmt->execute();

    header("location: verificationRequete.php?estValide=".$estValide."&type=modifierProduit"); 


?>