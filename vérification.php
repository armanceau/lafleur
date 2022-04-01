<?php 

session_start() ;

require "connection.php" ;
$login=$_REQUEST['login'] ;
$mdp=SHA1($_REQUEST['mdp']);


$sql=$connection ->prepare('SELECT * FROM `administrateur` WHERE login="'.$login.'" AND mdp="'.$mdp.'"') ;
$sql->bindParam('login', $login, PDO::PARAM_INT) ;

$sql->execute();

$ligne = $sql->fetch();
     
if ($login==$ligne['login'] && $mdp==$ligne['mdp'] ) {
    
        $_SESSION['login'] = $login;
        $_SESSION['mdp'] = $mdp;
        //header("Location: ");
       
}else{

echo "Login ou mot de passe incorect" ;

}
?>


