<?php 

require 'htmlAssets/header.php';

?>
            
<main>

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
        Bonjour <?php echo $_SESSION['prenom']; ?>, bienvenue sur votre page de profil ! Vous pouvez ci-dessous gérer votre compte en modifiant vos informations ou en vous déconnectant.  
      </p>
  </div>

  <form action="update__infoPerso.php" method="GET" id="modif__infoPerso">
    <div class="container_infoPerso">

        <div class="infoInput">
          <div class="infoLibelle">
                  <p>NOM :</p>
          </div>

          <div class="informationInput">
                  <input type="text" name="nom" value="<?php echo $_SESSION['nom'] ?>" required>
          </div>  

        </div>

        <div class="infoInput">

          <div class="infoLibelle">
                  <p>PRÉNOM :</p>
          </div>

          <div class="informationInput">
                  <input type="text"  name="prenom" value="<?php echo $_SESSION['prenom'] ?>" required>
          </div>

        </div>

        <div class="infoInput">

          <div class="infoLibelle">
                  <p>NUMERO DE TÉLÉPHONE :</p>
          </div>

          <div class="informationInput">
                  <input type="text"   id="phoneNumber" maxlength="14" name="tel" value="<?php echo $_SESSION['tel'] ?>" required>
          </div>
        </div>

        <div class="infoInput">

          <div class="infoLibelle">
                  <p>ADRESSE EMAIL :</p>
          </div>

          <div class="informationInput">
                  <input type="email"  name="email" value="<?php echo $_SESSION['email'] ?>" required>
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
                  <input type="text"  name="adresse" value="<?php echo $_SESSION['adresse'] ?>" required>
          </div>

        </div>

    </div>
    <button class="validation__modifInfo" type="submit">Valider mes modifications </button>
  </form>
</div>


</main>

<script type="text/javascript" src="./JS/scriptNumTel.js"></script>
<script type="text/javascript" src="./JS/verif__modifInfo.js"></script>

<?php require 'htmlAssets/footer2.html'; ?>