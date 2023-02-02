<?php require 'htmlAssets/header.php'; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création du comtpe</title>
</head>



<body>

        <div class="container Inscription">

                <div class="insInput">
                        <div class="insLibelle">
                                <p>NOM</p>
                        </div>

                        <div class="inscriptionInput">
                                <input type="text" class="insInputNom">
                        </div>  

                        <div class="insValidation">
                                <img src="./assets/icons/validation.png" alt="">
                        </div>
                </div>

                <div class="insInput">
                        <div class="insLibelle">
                                <p>PRENOM</p>
                        </div>

                        <div class="inscriptionInput">
                                <input type="text" class="insInputPrenom">
                        </div>

                        <div class="insValidation">
                                <img src="./assets/icons/validation.png" alt="">
                        </div>
                </div>

                <div class="insInput">
                        <div class="insLibelle">
                                <p>ADRESSE EMAIL</p>
                        </div>

                        <div class="inscriptionInput">
                                <input type="email" class="insInputEmail">
                        </div>

                        <div class="insValidation">
                                <img src="./assets/icons/validation.png" alt="">
                        </div>
                </div>

                <div class="insInput">
                        <div class="insLibelle">
                                <p>MOT DE PASSE</p>
                        </div>

                        <div class="inscriptionInput">
                                <input type="password" class="insInputMdp">
                        </div>

                        <div class="insValidation">
                                <img src="./assets/icons/validation.png" alt="">
                        </div>
                </div>

                <div class="insInput">
                        <div class="insLibelle">
                                <p>ADRESSE DE LIVRAISON</p>
                        </div>

                        <div class="inscriptionInput">
                                <input type="text" class="insInputAdresse">
                        </div>

                        <div class="insValidation">
                                <img src="./assets/icons/validation.png" alt="">
                        </div>
                </div>
        </div>


</body>

<?php require 'htmlAssets/footer2.html';?>