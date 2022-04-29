<?php

require "connection.php" ;
$email=$_REQUEST['email'] ;
$motDePasse=SHA1($_REQUEST['motDePasse']) ;
$nom=$_REQUEST['nom'] ;
$prenom=$_REQUEST['prenom'] ;
$adresse=$_REQUEST['adresse'] ;
$tel=$_REQUEST['tel'] ;

$sql=$connection ->prepare('INSERT INTO utilisateur (`mail_login`, `mot_de_passe_user`, `nom`, `prenom`, `adresse`, `tel`) VALUES 
("'.$email.'", "'.$motDePasse.'", "'.$nom.'", "'.$prenom.'","'.$adresse.'", '.$tel.')') ;
$sql->bindParam('[{.2}]', $motDePasse, PDO::PARAM_INT) ;

$sql->execute();

echo "Vos informations ont bien été ajoutées à notre base de données ! Vous êtes maintenant inscris !"

?>

<html>
    <br>
    <br>
   <button> <a href="Authentification.php">se connecter avec son nouveau compte </a> </button>
</html>