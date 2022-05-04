<?php
    require 'connection.php';

var_dump("UPDATE categorie SET code_de_la_categorie=".$_REQUEST["newNomCategorie"].", nom_de_la_categorie=".$_REQUEST['newCodeCategorie']." 
WHERE code_de_la_categorie = ".$_REQUEST["ancienCodeCategorie"]);

    $stmt = $connection->prepare("UPDATE categorie SET code_de_la_categorie=:codeCateg, nom_de_la_categorie=:nomCateg 
    WHERE code_de_la_categorie = :codeCateg");
    $stmt->bindParam(':nomCateg', $_REQUEST['newCodeCategorie'], PDO::PARAM_STR);
    $stmt->bindParam(':codeCateg', $_REQUEST["newNomCategorie"], PDO::PARAM_STR);


    $stmt->execute();
    
    //header("location: BackOffice.php");   



?>