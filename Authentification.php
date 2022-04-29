<?php include "header/header.php"; ?>

<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>

<body>
    <div class="container-fluid" style = "padding-top: 90px;">
        <div class="row">

            <div class="col-3"></div>

            <div class="col-6 rounded row" style = "text-align : center; background-color : #C4C4C4; padding-top : 50px;">
 
                <div class="col-1"></div>
                    

                <div class="col-10">

                    <form method='GET' action='vérification.php'>

                        <div class ="rounded-pill" style="font-size: 30px;font-family: lobster; color : white;background-color: #006430;">
                            <label>Entrez votre identifiant :
                                <br>
                                <div class ="rounded" style="font-size: 15px; background-color: background-color: lightgray; padding-bottom : 10px;">
                                    <input style = "text-align: center;" type="text" name="login"  placeholder="Votre identifiant" required>
                                
                                </div>
                            </label>
                        </div>
                        
                        </br>
                        </br>


                        <div class ="rounded-pill" style="font-size: 30px;font-family: lobster; color : white;background-color: #006430;">
                            <label>Entrez votre mot de passe :
                                <br>

                                <div class ="rounded" style="font-size: 15px; background-color: background-color: lightgray; padding-bottom : 10px;" >
                                    <input  style = "text-align: center;"type="password" name="mdp" placeholder="Entrez votre mot de passe" required>
                                    
                                </div>
                            </label>
                        </div>

                        </br>
                        </br>

                    
                        <input type="submit" value="S'identifier">
                        <input type ="reset" value ="Annuler">
                    
                    </form>
                    <br>
                    <p>Si vous n'avez pas encore de compte, nous vous invitons à vous inscrire.</p>

                    <button class="rounded-pill" style = "background-color: #006430;">
                        <a href="inscription.php" style = "color : white;">  S'inscrire </a>
                    </button>

                    </br>
                    </br>

                    <button class="rounded-pill" style = "margin-bottom : 70px;background-color: #006430;">
                        <a href="AuthentificationAdmin.php" style = "color : white;"> S'identifier en tant qu'administrateur </a>
                    </button>
                </div>
                
                <div class="col-1"></div>
            </div>

            <div class="col-3"></div>
        </div>
    </div>
</body>
<?php include "footer.html";?>