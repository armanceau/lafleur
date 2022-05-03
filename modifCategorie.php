<?php
    require 'connection.php';


    $stmt = $connection->prepare("UPDATE categorie SET code_de_la_categorie=':nomCateg', nom_de_la_categorie=':codeCateg' 
    WHERE code_de_la_categorie = :codeCateg");
    $stmt->bindParam(':nomCateg', $_REQUEST['newCodeCategorie'], PDO::PARAM_STR);
    $stmt->bindParam(':codeCateg', $_REQUEST["newNomCategorie"], PDO::PARAM_STR);


    $stmt->execute();
    
    //header("location: BackOffice.php");   



?>