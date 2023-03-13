<?php
session_start();

require "connection.php" ;

try{
    

    
    $sql= $connection->prepare("SELECT * FROM utilisateur WHERE mail_login = :mail LIMIT 1") ;
    $sql->bindParam(':mail', $_REQUEST["login"], PDO::PARAM_STR);

    $sql->execute();
    $ligne = $sql->fetch();

    var_dump($_REQUEST['mdp']);
    var_dump($_SESSION["motDePasse"]);
    var_dump($ligne ['mot_de_passe_user']); 

    if(!empty($ligne) && password_verify($_REQUEST['mdp'],$ligne ['mot_de_passe_user']))
    {

        $_SESSION["email"]=$ligne['mail_login'];
        $_SESSION["motDePasse"]=$ligne['mot_de_passe_user'];
        $_SESSION["nom"]=$ligne['nom'];
        $_SESSION["prenom"]=$ligne['prenom'];
        $_SESSION["adresse"]=$ligne['adresse'];
        $_SESSION["tel"]=$ligne['tel'];
        
        //header("Location: InfosPerso.php");

 
    }else{

        //header("Location: home.php");
        
    }

}catch (PDOException $pdo){
    echo "Erreur: ".$pdo->getMessage();
    echo"<a href =\"index.php\">Retour à l'accueil</a>";
}



?>