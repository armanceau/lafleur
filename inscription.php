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

        <form action="CreationCompte.php" method="GET">
                <div class="container Inscription">

                        <div class="insInput">
                                <div class="insLibelle">
                                        <p>NOM</p>
                                </div>

                                <div class="inscriptionInput">
                                        <input type="text" class="insInputNom" name="nom" required>
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
                                        <input type="text" class="insInputPrenom" name="prenom"  required>
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
                                        <input type="text" class="insInputTel" id="phoneNumber" maxlength="14" name="tel" required>
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
                                        <input type="email" class="insInputEmail" name="email"  required>
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
                                        <input type="password" class="insInputMdp" name="motDePasse"  required>
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
                                        <input type="text" class="insInputAdresse" name="adresse" required>
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