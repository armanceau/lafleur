<?php require 'htmlAssets\header.php';  ?>

<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>

<body>

    <form method='GET' action='verification.php'>
        <div class="container_login">

            <div class="logo_login_right">
                <img src="./assets/icons/rmbg_logoLaFleur.png" alt="logo right" >
            </div>

            <div class="id_login">

                <p id="libelle_id_login">
                    IDENTIFIANT
                </p>

                <input type="email" name="mail" id="input_id_login"> 

            </div>

            <div class="mdp_login">

                <p id="libelle_mdp_login">
                    MOT DE PASSE
                </p>

                <input type="password" name="mdp" id="input_mdp_login"> 

            </div>

            
            <button class="validation_login" type="submit"> <img src="./assets/icons/arrow.png" alt="flèche" style="width: 50px; height: 50px;" ></button>
            

            <div class="option_login">
                <div class="inscription_login">
                    <a href="inscription.php">S'inscrire</a>
                </div>

                <div class="admin_login">
                    <a href="AuthentificationAdmin.php">S'identifier <br> en tant qu'administrateur</a>
                </div>
            </div>
            

            <div class="logo_login_left">
                <img src="./assets/icons/rmbg_logoLaFleur.png" alt="logo left">
            </div>

        </div>
    </form>
    
</body>
<?php require 'htmlAssets\footer.html';?>