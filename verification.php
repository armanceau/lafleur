<?php 

session_start() ;

require "connection.php" ;
$login=$_REQUEST['login'] ;
$mdp=SHA1($_REQUEST['mdp']);



$sql=$connection ->prepare('SELECT * FROM `utilisateur` WHERE mail_login="'.$login.'" AND mot_de_passe_user="'.$mdp.'"') ;
$sql->bindParam('[{.$login}]', $login, PDO::PARAM_INT) ;

$sql->execute();

$ligne = $sql->fetchall();
     
if ($login==$ligne['mail_login'] && $mdp==$ligne['mot_de_passe_user'] ) {
    
        $_SESSION['login'] = $login;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['nom']=$ligne['nom'];
        $_SESSION['prenom']=$ligne['prenom'];
        $_SESSION['mail']=$ligne['mail_login'];
        $_SESSION['tel']=$ligne['tel'];
        $_SESSION['livraison']=$ligne['adresse'];
        $_SESSION['mdp/']=$ligne['mot_de_passe_user'];
        header("Location: main.php");
       
}else{

echo "Login ou mot de passe incorect" ;

}
?>

<html>
<br>
<br>
 <button> <a href="Authentification.php">réessayer</a> </button>
</html>


