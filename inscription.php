<?php include "header/header.php"; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création du comtpe</title>
</head>



<body>

        <div class="container-fluid" style = "padding-top: 30px;">
                <div class="row">

                        <div class="col-3"></div>

                        <div class="col-6 rounded row" style = "text-align : center; background-color : #C4C4C4; padding-top : 20px; font-family: lobster;">

                                <div class="col-1"></div>
                    

                                <div class="col-10">
                                        <h2>   Ajoutez vos informations</h2>
                                        <form method="GET" action="CreationCompte.php">
                                                <br>
                                                <!-- Adresse mail (login) -->
                                                <div class ="rounded-pill" style="font-size: 20px;font-family: lobster; color : white;background-color: #006430;">
                                                        <label>Email:</label>
                                                        <br>
                                                        <div class ="rounded" style="font-size: 15px; background-color: background-color: lightgray; padding-bottom : 10px;">
                                                                <input style ="text-align : center;" type="email" name="email" placeholder="Votre adresse mail" required ><br/>
                                                        </div>
                                                </div>
                                        <br>

                                                <!-- Mot de passe -->
                                                <div class ="rounded-pill" style="font-size: 20px;font-family: lobster; color : white;background-color: #006430;">
                                                        <label>Mot de passe:</label>
                                                        <br>
                                                        <div class ="rounded" style="font-size: 15px; background-color: background-color: lightgray; padding-bottom : 10px;">
                                                                <input style ="text-align : center;" type="password" name="motDePasse" maxlength="30" minlength="9" placeholder="Votre mot de passe"required><br/>
                                                        </div>
                                                </div>
                                        <br>

                                                <!-- Nom -->
                                                <div class ="rounded-pill" style="font-size: 20px;font-family: lobster; color : white;background-color: #006430;">
                                                        <label>Nom:</label>
                                                        <br>
                                                        <div class ="rounded" style="font-size: 15px; background-color: background-color: lightgray; padding-bottom : 10px;">
                                                                <input style ="text-align : center;" type="text" name="nom" placeholder="Votre nom" required ><br/>
                                                        </div>
                                                </div>

                                        <br>

                                                <!-- Prénom -->
                                                <div class ="rounded-pill" style="font-size: 20px;font-family: lobster; color : white;background-color: #006430;">
                                                        <label>Prénom:</label>
                                                        <br>
                                                        <div class ="rounded" style="font-size: 15px; background-color: background-color: lightgray; padding-bottom : 10px;">
                                                                <input style ="text-align : center;" type="text" name="prenom" placeholder="Votre prénom" required ><br/>
                                                        </div>
                                                </div>

                                        <br>

                                                <!-- Adresse -->
                                                <div class ="rounded-pill" style="font-size: 20px;font-family: lobster; color : white;background-color: #006430;">
                                                        <label>Adresse:</label>
                                                        <br>
                                                        <div class ="rounded" style="font-size: 15px; background-color: background-color: lightgray; padding-bottom : 10px;">
                                                                <input style ="text-align : center;" type="text" name="adresse" placeholder="Votre adresse" required ><br/>
                                                        </div>
                                                </div>
                                        <br>

                                                <!-- Téléphone -->
                                                <div class ="rounded-pill" style="font-size: 20px;font-family: lobster; color : white;background-color: #006430;">
                                                        <label>Téléphone:</label>
                                                        <br>
                                                        <div class ="rounded" style="font-size: 15px; background-color: background-color: lightgray; padding-bottom : 10px;">
                                                                <input style ="text-align : center;" type="number" name="tel" maxlength="10" minlength="10" placeholder="Votre téléphone" required ><br/>
                                                        </div>
                                                </div>
                                        <br>

                                                <div style = "margin-bottom : 20px"> 
                                                        <button type="submit">Créer</button>
                                                        <button type="reset"> Annuler </button>
                                                </div>  
                                        </form>
                                </div>

                                <div class="col-1" ></div>

                                <div class="col-3" ></div>
                        </div>
                </div>
        </div>

<?php include "footer.html";?>