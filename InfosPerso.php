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
    imgUrl="assets/icons/Icone_Profil.png"
    type='type="text"'
    id="a"
    break;
  case "#b":
    name="<?php echo $_SESSION['prenom'] ?>"
    imgUrl="assets/icons/Icone_Profil.png"
    type='type="text"'
    id="b"
    break;
  case "#c":
    name="<?php echo $_SESSION['mail'] ?>"
    imgUrl="assets/icons/Icone_Mail.png"
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
    imgUrl="assets/icons/Icone_Telephone.png"
    type='type="text"'
    id="e"
    break;
  case "#f":
    name="<?php echo $_SESSION['livraison'] ?>"
    imgUrl="assets/icons/Icone_Livraison.png"
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
    name="<?php echo $_SESSION['mail'] ?>"
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
    name="<?php echo $_SESSION['livraison'] ?>"
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
    <div class="row">
    <div class="col-4"></div>
    <div class="col-4 container-info" >
        <div id="a" class="line" >
            <img src="assets/icons/Icone_Profil.png" width="70" height="70">
            <?php echo "<p class='info'>".$_SESSION['nom']."</p>"; ?>
            <img class="crayon" src="assets/icons/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#a')">
            
        </div>
        <hr>
        <div id="b" class="line" >
            <img src="assets/icons/Icone_Profil.png" width="70" height="70px">
            <?php echo "<p class='info'>".$_SESSION['prenom']."</p>"; ?>
            <img class="crayon" src="assets/icons/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#b')">

        </div>
        <hr>
        <div class="line" id="c">
            <img src="assets/icons/Icone_Mail.png" width="70" height="70px">
            <?php echo "<p class='info'>".$_SESSION['mail']."</p>"; ?>
            <img class="crayon" src="assets/icons/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#c')">
            
        </div>
        <hr>
        <div class="line" id="d">
            <img src="./img/Icone_Mot_De_Passe.png" width="70" height="70px" >
            <?php echo "<p class='info'>secret défense</p>"; ?>
            <img class="crayon" src="assets/icons/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#d')">
            
        </div>
        <hr>
        <div class="line" id="e">
            <img src="assets/icons//Icone_Telephone.png" width="70" height="70px">
            <?php echo "<p class='info'>".$_SESSION['tel']."</p>"; ?>
            <img class="crayon" src="assets/icons/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#e')">
           
        </div>
        <hr>
        <div class="line" id="f">
            <img src="assets/icons/Icone_Livraison.png" width="70" height="70px">
            <?php echo "<p class='info'>".$_SESSION['livraison']."</p>"; ?>
            <img class="crayon"  src="assets/icons/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#f')">
           
        </div>
    </div>
    </div>
</main>

<?php require 'htmlAssets/footer.html'; ?>