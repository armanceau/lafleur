<?php
    require 'connection.php';

    $stmt = $connection->prepare("UPDATE categorie SET code_de_la_categorie=':nomCateg', nom_de_la_categorie=':codeCategorie'");
    $stmt->bindParam(':nomCateg', $_REQUEST['newCodeCategorie']);
    $stmt->bindParam(':codeCateg', $_REQUEST["newNomCategorie"]);
    
    
    $stmt->execute();
    
    header("location: BackOffice.php");   



?>