<?php 
session_start();
require './htmlAssets/header.php';


echo '<main>

<div class="container_info">

  <div class="header_info">

    <img id="icon_infoPerso" src="./assets/icons/id-card.png" alt="icon infoPerso">

    <div class="logout">
      <form action="deconnect.php" method="post">
        <button class="logout_btn"type="submit"><img class="logout_icon" src="./assets/icons/logout.png" alt=""></button>
      </form>
    </div>

  </div>

  <div class="msg_info">
    <p>
        Bonjour '. $_SESSION["prenom"] .', bienvenue sur votre page de profil ! Vous pouvez ci-dessous gérer votre compte en modifiant vos informations ou en vous déconnectant.  
    </p>
  </div>

  <form action="update__infoPerso.php" method="GET" id="modif__infoPerso">
    <div class="container_infoPerso">

        <div class="infoInput">
          <div class="infoLibelle">
                  <p>NOM :</p>
          </div>

          <div class="informationInput">
                  <input type="text" name="nom" value="'. $_SESSION["nom"] .'" required>
          </div>  

        </div>

        <div class="infoInput">

          <div class="infoLibelle">
                  <p>PRÉNOM :</p>
          </div>

          <div class="informationInput">
                  <input type="text"  name="prenom" value="'. $_SESSION["prenom"] .'" required>
          </div>

        </div>

        <div class="infoInput">

          <div class="infoLibelle">
                  <p>NUMERO DE TÉLÉPHONE :</p>
          </div>

          <div class="informationInput">
                  <input type="text"   id="phoneNumber" maxlength="14" name="tel" value="'. $_SESSION["tel"] .'" required>
          </div>
        </div>

        <div class="infoInput">

          <div class="infoLibelle">
                  <p>ADRESSE EMAIL :</p>
          </div>

          <div class="informationInput">
                  <input type="email"  name="email" value="'. $_SESSION["email"] .'" required>
          </div>
        </div>

        <div class="infoInput">
          <div class="infoLibelle">
                  <p>MOT DE PASSE :</p>
          </div>
          
          <div class="informationInput">
                  <input type="password" id="password"  name="motDePasse" placeholder="Modifier votre mot de passe">
          </div>
        </div>

        <div class="infoInput">

          <div class="infoLibelle">
                  <p>ADRESSE DE LIVRAISON :</p>
          </div>

          <div class="informationInput">
                  <input type="text"  name="adresse" value="'. $_SESSION["adresse"] .'" required>
          </div>

        </div>
        <button class="validation__modifInfo" type="submit">Valider mes modifications </button>
    </div>
    
  </form>
</div>


</main>

<script type="text/javascript" src="./JS/scriptNumTel.js"></script>
<script type="text/javascript" src="./JS/verif__modifInfo.js"></script>';

require './htmlAssets/footer2.html';

?>


