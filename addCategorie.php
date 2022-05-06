<?php


include 'connection.php';



$stmt = $connection->prepare("INSERT categorie VALUES (:codeCateg, :nomCateg)");
$stmt->bindParam(':nomCateg', $_REQUEST["nomCategorie"]);
$stmt->bindParam(':codeCateg', $_REQUEST["codeCategorie"]);


$estValide = $stmt->execute();

header("location: verificationRequete.php?estValide=".$estValide."&type=ajouterCategorie"); 

?>



