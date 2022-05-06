<?php include "header/header.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page d'identification</title>
</head>


<body>
    <div class="container-fluid" style = "padding-top: 90px;">
        <div class="row">

            <div class="col-3"></div>

            <div class="col-6 rounded row" style = "text-align : center; background-color : #C4C4C4; padding-top : 20px;">

                <div class="col-1"></div>
                    

                <div class="col-10">
                    

                    <h2 style = "font-family : lobster; "> S'identifiez : </h2>
                    <br>
                    <form method='GET' action='verificationAdmin.php'>

                        <div class ="rounded-pill" style="font-size: 30px;font-family: lobster; color : white;background-color: #006430;">
                            <label>Identifiant :</label>
                            <div class ="rounded" style="font-size: 15px; background-color: background-color: lightgray; padding-bottom : 10px;">
                                <input style = "text-align: center;" type="text" name="login"  placeholder="Votre adresse identifiant" required>
                            </div>  
                        </div>

                            </br>
                            </br>

                        <div class ="rounded-pill" style="font-size: 30px;font-family: lobster; color : white;background-color: #006430;">
                            <label>mot de passe :</label>
                            <div class ="rounded" style="font-size: 15px; background-color: background-color: lightgray; padding-bottom : 10px;">
                                <input style = "text-align: center;" type="password" name="mdp" placeholder="Entrez votre mot de passe" required>
                            </div>
                        </div>

                            </br>
                            </br>

                        
                        <div style ="padding-bottom : 20px;">
                            <input type="submit" value="S'identifier">
                            <input type ="reset" value ="Annuler">
                        </div>

                    </form>

                </div>

                <div class="col-1"></div>

            </div>

        </div>

    </div>
                        
<?php include "footer.html";?> 