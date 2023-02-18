<?php
session_start() ;
require 'htmlAssets/header.php';
require "connection.php" ;

try{
    $sql=$connection ->prepare('INSERT INTO utilisateur VALUES(:mail_login, :motDePasse, :nom, :prenom, :adresse,:tel);');

    $options = [
        'cost' => 12,
    ];
    
    $sql->bindParam(':mail_login', $_REQUEST['email']);
    $sql->bindParam(':motDePasse', password_hash($_REQUEST['motDePasse'],PASSWORD_BCRYPT,$options););
    $sql->bindParam(':nom', $_REQUEST['nom']);
    $sql->bindParam(':prenom', $_REQUEST['prenom']);
    $sql->bindParam(':adresse', $_REQUEST['adresse']);
    $sql->bindParam(':tel', $_REQUEST['tel']);

    $sql->execute();
    //echo $sql->debugDumpParams();
    $_SESSION["nom"]=$_REQUEST['nom'];
    $_SESSION["prenom"]=$_REQUEST['prenom'];
    $_SESSION["tel"]=$_REQUEST['tel'];
    $_SESSION["email"]=$_REQUEST['email'];
    $_SESSION["motDePasse"]=$_REQUEST['motDePasse'];
    $_SESSION["adresse"]=$_REQUEST['adresse'];
    
    include "./htmlAssets/msg-succes-register.html";
}catch(Exception $e){
    include "./htmlAssets/msg-error-register.html";
}

?>

<?php require 'htmlAssets/footer.html';?>