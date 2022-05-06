<?php

include 'connection.php';

$sql = "DELETE FROM produit WHERE reference =:ref";
echo $sql;
$stmt = $connection->prepare($sql);
    $stmt->bindValue(':ref', $_REQUEST["ref"], PDO::PARAM_STR);

    $estValide = $stmt->execute();

header("location: verificationRequete.php?estValide=".$estValide."&type=supprimerProduit");

?>