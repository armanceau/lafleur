<?php
require 'htmlAssets/header.php';
require "connection.php" ;

try{
    $sql=$connection ->prepare('INSERT INTO utilisateur VALUES(:mail_login, :motDePasse, :nom, :prenom, :adresse,:tel);');

    $psw = password_hash($_REQUEST['motDePasse'],PASSWORD_DEFAULT);

    $sql->bindParam(':mail_login', $_REQUEST['email']);
    $sql->bindParam(':motDePasse', $psw);
    $sql->bindParam(':nom', $_REQUEST['nom']);
    $sql->bindParam(':prenom', $_REQUEST['prenom']);
    $sql->bindParam(':adresse', $_REQUEST['adresse']);
    $sql->bindParam(':tel', $_REQUEST['tel']);

    $sql->execute();
    //echo $sql->debugDumpParams();
    include "./htmlAssets/msg-succes-register.html";
}catch(Exception $e){
    include "./htmlAssets/msg-error-register.html";
}

?>

<?php require 'htmlAssets/footer.html';?>