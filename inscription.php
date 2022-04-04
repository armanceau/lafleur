<?php include "header/header.html";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <title>Création du comtpe</title>
</head>

<body>
        <div class="container-fluid">

                <div class="row align-items-start">

                        <div class="col-4"></div>

                        <div class="col-4">
                                
                                <div class ="rounded" style="text-align: center; font-family: lobster; font-size: 35px;background-color: lightgray">
                                
                                        <h2>   Ajoutez vos informations</h2>
                                        
                                </div>

                                <br>

                                <form method="GET" action="CreationCompte.php" style ="text-align : center;">

                                        <div class ="rounded" style="background-color: lightgray">
                                                <!-- Adresse mail (login) -->
                                                <label>Email:</label>
                                                <br>
                                                <input style = "border-radius :10px;" type="email" name="email" required ><br/>
                                                <br>
                                        </div>

                                        <br>

                                        <div class ="rounded" style="background-color: lightgray">
                                                <!-- Mot de passe -->
                                                <label>Mot de passe:</label>
                                                <br>
                                                <input style = "border-radius :10px;" type="password" name="motDePasse" maxlength="30" minlength="9" required><br/>
                                                <br>
                                        </div>

                                        <br>

                                        <div class ="rounded" style="background-color: lightgray">
                                                <!-- Nom -->
                                                <label>Nom:</label>
                                                <br>
                                                <input style = "border-radius :10px;" type="text" name="nom" required ><br/>
                                                <br>
                                        </div>

                                        <br>

                                        <div class ="rounded" style="background-color: lightgray">
                                                <!-- Prénom -->
                                                <label>Prénom:</label>
                                                <br>
                                                <input style = "border-radius :10px;" type="text" name="prenom" required ><br/>
                                                <br>
                                        </div>

                                        <br>

                                        <div class ="rounded" style="background-color: lightgray">
                                                <!-- Adresse -->
                                                <label>Adresse:</label>
                                                <br>
                                                <input style = "border-radius :10px;" type="text" name="adresse" required ><br/>
                                                <br>
                                        </div>

                                        <br>

                                        <div class ="rounded" style="background-color: lightgray">
                                                <!-- Téléphone -->
                                                <label>Téléphone:</label>
                                                <br>
                                                <input style = "border-radius :10px;" type="number" name="tel"  required ><br/>
                                                <br>
                                        </div>
                                        
                                        <br>

                                        <input style = "background-color: #006430; color : white; font-family: lobster; font-size: 25px; margin-bottom: 8px" type="submit" value = "Créer"></button>

                                        <input style = "background-color: #006430; color : white; font-family: lobster; font-size: 25px;"type="reset" value = "Annuler">  </button>

                                </div>
                        
                                <div class="col-4"></div>

                        </form>
                </div>
        </div>
   

</body>

</html>
<?php include "footer.html"; ?>