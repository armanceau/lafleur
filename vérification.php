<?php 

session_start() ;

require "connection.php" ;
$login=$_REQUEST['login'] ;
$mdp=SHA1($_REQUEST['mdp']);


$sql=$connection ->prepare('SELECT * FROM `utilisateur` WHERE mail_login="'.$login.'" AND mot_de_passe_user="'.$mdp.'"') ;
$sql->bindParam('[{.$login}]', $login, PDO::PARAM_INT) ;

$sql->execute();

$ligne = $sql->fetch();
     
if ($login==$ligne['mail_login'] && $mdp==$ligne['mot_de_passe_user'] ) {
    
        $_SESSION['login'] = $login;
        $_SESSION['mdp'] = $mdp;
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


