<?php
session_start();

require "connection.php" ;

try{
    

    

    $sql->bindParam(':mail', $_REQUEST["login"], PDO::PARAM_STR);

    $sql->execute();
    $ligne = $sql->fetch();

    if(!empty($ligne) && password_verify($_REQUEST['mdp'],$ligne['mot_de_passe_user']))
    {
        $_SESSION['login'] = $_REQUEST["login"];
        $_SESSION['mdp'] = $_REQUEST['mdp'];
        $_SESSION['nom']=$ligne['nom'];
        $_SESSION['prenom']=$ligne['prenom'];
        $_SESSION['mail']=$ligne['mail_login'];
        $_SESSION['tel']=$ligne['tel'];
        $_SESSION['livraison']=$ligne['adresse'];
        $_SESSION['mdp/']=$ligne['mot_de_passe_user'];
        echo "success";
        header("Location: InfosPerso.php");

 
    }else{

        echo "failed";
        header("Location: Authentification.php");
        
        }

}catch (PDOException $pdo){
    echo "Erreur: ".$pdo->getMessage();
    echo"<a href =\"index.php\">Retour à l'accueil</a>";
}



?>