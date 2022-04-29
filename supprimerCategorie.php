<?php
  try {
    include 'connection.php';

    $stmt = $connection->prepare("DELETE FROM categorie WHERE code_de_la_categorie =(:codeCateg)");
    $stmt->bindParam(':codeCateg', $_REQUEST["codeCategorie"]);


    $stmt->execute();

    header("location: BackOffice.php"); 
        
}catch (BadFunctionCallException $e){
    echo "connection à MySQL inpossible : ", $e->getMessage();
    die();
}





?>