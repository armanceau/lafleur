<?php

include 'connection.php';

    try{
        $sql = "DELETE FROM produit WHERE reference =:ref";
        echo $sql;
        $stmt = $connection->prepare($sql);
            $stmt->bindValue(':ref', $_REQUEST["ref"], PDO::PARAM_STR);

            $stmt->execute();

            header("location: BackOffice.php");

    }catch (PDOException $e){
        echo "Erreur: ".$e->getMessage();
    }

?>