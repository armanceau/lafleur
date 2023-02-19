<?php 

require 'htmlAssets/header.php';

?>
<script>

 
    function OnclickCrayon1(Status)
{   

    let name
    let imgUrl
    let type

    switch (Status) {
  case "#a":
    name="<?php echo $_SESSION['nom']?>"
    imgUrl="assets/icons/.png"
    type='type="text"'
    id="a"
    break;
  case "#b":
    name="<?php echo $_SESSION['prenom'] ?>"
    imgUrl="assets/icons/.png"
    type='type="text"'
    id="b"
    break;
  case "#c":
    name="<?php echo $_SESSION['email'] ?>"
    imgUrl="assets/icons/.png"
    type='type="text"'
    id="c"
    break;
  case "#d":
    name="secret"
    imgUrl="assets/icons/Icone_Mot_De_Passe.png"
    type='type="password"'
    id="d"
    break;
  case "#e":
    name="<?php echo $_SESSION['tel'] ?>"
    imgUrl="assets/icons/.png"
    type='type="text"'
    id="e"
    break;
  case "#f":
    name="<?php echo $_SESSION['adresse'] ?>"
    imgUrl="assets/icons/.png"
    type='type="text"'
    id="f"
    break;

}




    element='<div class="line" id="'+id+'"><img src="'+imgUrl+'" width="70" height="70"><input class="info" '+type+' placeholder="'+name+'"><img class="crayon" src="./IMG/Icone_validé.png" width="80" height="70" onclick="valide(\''+Status+'\')" ></div>'

    
    
    $( Status ).replaceWith(element);
  

}

 function valide(data){

  switch (data) {
  case "#a":
    name="<?php echo $_SESSION['nom']?>"
    imgUrl="assets/icons/Icone_Profil.png"
    type='type="text"'
    id="a"
    categ="nom"
    break;
  case "#b":
    name="<?php echo $_SESSION['prenom'] ?>"
    imgUrl="assets/icons/Icone_Profil.png"
    type='type="text"'
    id="b"
    categ="prenom"
    break;
  case "#c":
    name="<?php echo $_SESSION['email'] ?>"
    imgUrl="assets/icons/Icone_Mail.png"
    type='type="text"'
    id="c"
    categ="mail"
    break;
  case "#d":
    name="secret"
    imgUrl="assets/icons/Icone_Mot_De_Passe.png"
    type='type="password"'
    id="d"
    categ="secret"
    break;
  case "#e":
    name="<?php echo $_SESSION['tel'] ?>"
    imgUrl="assets/icons/Icone_Telephone.png"
    type='type="text"'
    id="e"
    categ="tel"
    break;
  case "#f":
    name="<?php echo $_SESSION['adresse'] ?>"
    imgUrl="assets/icons/Icone_Livraison.png"
    type='type="text"'
    id="f"
    categ="livraison"
    break;

}
    
  

    
    $(data).replaceWith('<div class="line" id="'+id+'"><img src="'+imgUrl+'" width="70" height="70"><p>'+name+'</p><img class="crayon" src="./IMG/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1(\''+data+'\') "</div>');
    
   
}


             
   
</script>
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

  <form action="update__infoPerso.php" method="GET">
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
          
          <div id="informationInput__mdp" class="informationInput">
                  <input type="text"  name="motDePasse" placeholder="Modifier votre mot de passe">
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

<?php require 'htmlAssets/footer2.html'; ?>