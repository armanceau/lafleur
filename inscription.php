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

        <form action="CreationCompte.php">
                <div class="container Inscription">

                        <div class="insInput">
                                <div class="insLibelle">
                                        <p>NOM</p>
                                </div>

                                <div class="inscriptionInput">
                                        <input type="text" class="insInputNom" required>
                                </div>  

                                <div class="insValidation">
                                        <img src="./assets/icons/validation.png" alt="validation">
                                </div>
                        </div>

                        <div class="insInput">
                                <div class="insLibelle">
                                        <p>PRÉNOM</p>
                                </div>

                                <div class="inscriptionInput">
                                        <input type="text" class="insInputPrenom"  required>
                                </div>

                                <div class="insValidation">
                                        <img src="./assets/icons/validation.png" alt="validation">
                                </div>
                        </div>

                        <div class="insInput">
                                <div class="insLibelle">
                                        <p>NUMERO DE TÉLÉPHONE</p>
                                </div>

                                <div class="inscriptionInput">
                                        <input type="text" class="insInputTel" id="phoneNumber" maxlength="14" required>
                                </div>

                                <div class="insValidation">
                                        <img src="./assets/icons/validation.png" alt="validation">
                                </div>
                        </div>

                        <div class="insInput">
                                <div class="insLibelle">
                                        <p>ADRESSE EMAIL</p>
                                </div>

                                <div class="inscriptionInput">
                                        <input type="email" class="insInputEmail"  required>
                                </div>

                                <div class="insValidation">
                                        <img src="./assets/icons/validation.png" alt="validation">
                                </div>
                        </div>

                        <div class="insInput">
                                <div class="insLibelle">
                                        <p>MOT DE PASSE</p>
                                </div>

                                <div class="inscriptionInput">
                                        <input type="password" class="insInputMdp"  required>
                                </div>

                                <div class="insValidation">
                                        <img src="./assets/icons/validation.png" alt="validation">
                                </div>
                        </div>

                        <div class="insInput">
                                <div class="insLibelle">
                                        <p>ADRESSE DE LIVRAISON</p>
                                </div>

                                <div class="inscriptionInput">
                                        <input type="text" class="insInputAdresse"  required>
                                </div>

                                <div class="insValidation">
                                        <img src="./assets/icons/validation.png" alt="validation">
                                </div>
                        </div>

                        <button class="insBouton">
                                <div class="btnLibelle">
                                        <p>S'INSCRIRE</p>
                                </div>
                                <div class="btnFleche">
                                        <img src="./assets/icons/arrow.png" alt="Flèche">
                                </div>
                        </button>
                </div>
        </form>


</body>

<script type="text/javascript" src="./JS/scriptNumTel.js"></script>

<?php require 'htmlAssets/footer3.html';?>