<?php

    include 'connection.php';

    try{
        $sql = "DELETE FROM categorie WHERE code_de_la_categorie =:codeCateg";
        echo $sql;
        $stmt = $connection->prepare($sql);
            $stmt->bindValue(':codeCateg', $_REQUEST["code"], PDO::PARAM_STR);

            $stmt->execute();

            header("location: BackOffice.php");

    }catch (PDOException $e){
        echo "Erreur: ".$e->getMessage();
        echo"<a href =\"BackOffice.php\">Retour au BackOffice</a>";
    }

    
        






?>