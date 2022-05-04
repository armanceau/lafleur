<?php
include "header/header.php";
require "connection.php" ;


$sql=$connection ->prepare('INSERT INTO utilisateur VALUES(:mail_login, :motDePasse, :nom, :prenom, :adresse,:tel) ');

$sql->bindParam(':mail_login', $_REQUEST['email']);
$sql->bindParam(':motDePasse', SHA1($motDePasse));
$sql->bindParam(':nom', $_REQUEST['nom']);
$sql->bindParam(':prenom', $_REQUEST['prenom']);
$sql->bindParam(':adresse', $_REQUEST['adresse']);
$sql->bindParam(':tel', $_REQUEST['tel']);

$sql->execute();

?>

<html>
    <body>
        <div class="container-fluid" style = "padding-top: 230px;">
            <div class="row">

                <div class="col-2"></div>

                <div class="col-8 rounded row" style = "text-align : center; background-color : #C4C4C4; padding-top : 20px; padding-bottom : 20px;">
                    <div class="col-1"></div>

                    <div class="col-10" >
                        <p>Vos informations ont bien été ajoutées à notre base de données, vous êtes maintenant inscris !</p>
                        <button class="rounded-pill" style = "background-color: #006430; ">
                            <a href="Authentification.php" style = "color : white;font-family: lobster;" >Je me connecte avec mon compte</a> 
                        </button>
                    </div>

                </div>

                <div class="col-2"></div>

            </div>
        </div>
<?php include "footer.html";?>