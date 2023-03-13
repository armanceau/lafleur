<?php
session_start() ;
require 'htmlAssets/header.php';
require "connection.php" ;

$nomUpdated = $_REQUEST['nom'] ;
$prenomUpdated = $_REQUEST['prenom'] ;
$telUpdated = $_REQUEST['tel'] ;
$emailUpdated = $_REQUEST['email'] ;
$motDePasseUpdated = $_REQUEST['motDePasse'] ;
$adresseUpdated = $_REQUEST['adresse'] ;


try{
    $sql=$connection->prepare("UPDATE utilisateur SET mail_login=:mail_login, mot_de_passe_user=:motDePasse, nom=:nom, prenom=:prenom, adresse=:adresse, tel=:tel WHERE mail_login =:actual_mail_login");

    $options = [
        'cost' => 12,
    ];

    $motDePasseUpdatedHash = password_hash($motDePasseUpdated,PASSWORD_BCRYPT,$options);

    
    $sql->bindParam(':actual_mail_login', $_SESSION["email"]);
    $sql->bindParam(':mail_login', $emailUpdated);
    $sql->bindParam(':motDePasse', $motDePasseUpdatedHash);
    $sql->bindParam(':nom', $nomUpdated);
    $sql->bindParam(':prenom', $prenomUpdated);
    $sql->bindParam(':adresse', $adresseUpdated);
    $sql->bindParam(':tel', $telUpdated);

    $sql->execute();
    //echo $sql->debugDumpParams();
    $_SESSION["nom"]=$nomUpdated;
    $_SESSION["prenom"]= $prenomUpdated;
    $_SESSION["tel"]=$telUpdated;
    $_SESSION["email"]=$emailUpdated;
    $_SESSION["motDePasse"]=$motDePasseUpdated;
    $_SESSION["adresse"]= $adresseUpdated;
    
    include "./htmlAssets/msg-succes-modifInfo.html";
}catch(Exception $e){
    
    include "./htmlAssets/msg-error-register.html";
}

?>

<?php require 'htmlAssets/footer.html';?>