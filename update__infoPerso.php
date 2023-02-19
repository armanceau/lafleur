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

var_dump($nomUpdated);
var_dump($prenomUpdated);
var_dump($telUpdated);
var_dump($emailUpdated);
var_dump($motDePasseUpdated);
var_dump($adresseUpdated);

var_dump($_SESSION["email"]);



try{
    $sql=$connection ->prepare("UPDATE utilisateur SET mail_login=':mail_login', mot_de_passe_user=':motDePasse', nom=':nom', prenom=':prenom', adresse=':adresse', tel=':tel' WHERE mail_login = '".$_SESSION["email"]."'");

    $options = [
        'cost' => 12,
    ];

    $motDePasseUpdatedHash = password_hash($motDePasseUpdated,PASSWORD_BCRYPT,$options);

    
    
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
    
    echo 'ok' ;
    //include "./htmlAssets/msg-succes-register.html";
}catch(Exception $e){
    
    echo $sql->debugDumpParams() ;
    echo 'nop' ;
    echo $_SESSION["email"] ;
    //include "./htmlAssets/msg-error-register.html";
}

?>

<?php require 'htmlAssets/footer.html';?>