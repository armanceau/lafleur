<?php require 'htmlAssets\header.php';  


if(isset($_SESSION['login'])){
    header("Location: InfosPerso.php");
}else{
?>

    <form method='GET' action='verification.php'>
        <div class="container_login">

            <div class="logo_login_right">
                <img src="./assets/icons/rmbg_logoLaFleur.png" alt="logo right" >
            </div>

            <div class="id_login">

                <p id="libelle_id_login">
                    IDENTIFIANT
                </p>

                <input type="email" name="login" id="input_id_login"> 

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

<?php 
}
require 'htmlAssets\footer.html';
?>
