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


<form action="deconnect.php" method="post">
  <input type="submit" value="Déconnexion">
</form>
</main>

<?php require 'htmlAssets/footer.html'; ?>