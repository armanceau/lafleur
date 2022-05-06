<?php

    include 'connection.php';


    $sql = "DELETE FROM categorie WHERE code_de_la_categorie =:codeCateg";
    echo $sql;
    $stmt = $connection->prepare($sql);
    $stmt->bindValue(':codeCateg', $_REQUEST["code"], PDO::PARAM_STR);

    $estValide = $stmt->execute();

    header("location: verificationRequete.php?estValide=".$estValide."&type=ajouterCategorie"); 

    

?>