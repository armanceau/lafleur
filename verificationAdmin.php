<?php 

session_start() ;

require "connection.php" ;
$login=$_REQUEST['login'] ;
$mdp=SHA1($_REQUEST['mdp']);


$sql=$connection ->prepare('SELECT * FROM `administrateur` WHERE username_admin="'.$login.'" AND mot_de_passe_admin="'.$mdp.'"') ;
$sql->bindParam('[{.1}]', $login, PDO::PARAM_INT) ;

$sql->execute();

$ligne = $sql->fetch();
     
if ($login==$ligne['username_admin'] && $mdp==$ligne['mot_de_passe_admin'] ) {
    
        $_SESSION['login'] = $login;
        $_SESSION['mdp'] = $mdp;
        header("Location:Gestion.php" );
       
}else{

echo "Login ou mot de passe incorect" ;

}
?>

<html>
<br>
<br>
 <button> <a href="AuthentificationAdmin.php">réessayer</a> </button>
</html>


