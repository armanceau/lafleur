

<?php require 'header/header.php';
    
?>
<script>

    function OnclickCrayon1(Status)
{   

    let name
    let imgUrl

    switch (Status) {
  case "#a":
    name="$NClient"
    imgUrl="./img/Icone_Profil.png"
    break;
  case "#b":
    name="$PClient"
    imgUrl="./img/Icone_Profil.png"
    break;
  case "#c":
    name="$MailClient"
    imgUrl="./img/Icone_Mail.png"
    break;
  case "#d":
    name="$MDPClient"
    imgUrl="./img/Icone_Mot_De_Passe.png"
    break;
  case "#e":
    name="$TelClient"
    imgUrl="./img/Icone_Telephone.png"
    break;
  case "#f":
    name="$ADLivraisonClient"
    imgUrl="./img/Icone_Livraison.png"
    break;

}

    $( Status ).replaceWith( '<img src="'+imgUrl+'" width="70" height="70"><input class="info" type="text" placeholder="'+name+'"><img class="crayon" src="./IMG/Icone_validé.png" width="80" height="70" onclick="OnclickCrayon1("#a")></br>' );
  

}
    </script>
<main>
    <div class="row">
    <div class="col-4"></div>
    <div class="col-4 container-info" >
        <div id="a" class="line" >
            <img src="./img/Icone_Profil.png" width="70" height="70">
            <?php echo"$NClient" ?>
            <img class="crayon" src="./IMG/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#a')">
            
        </div>
        <hr>
        <div id="b" class="line" >
            <img src="./img/Icone_Profil.png" width="70" height="70px">
            <?php echo"$NClient" ?>
            <img class="crayon" src="./IMG/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#b')">

        </div>
        <hr>
        <div class="line" id="c">
            <img src="./img/Icone_Mail.png" width="70" height="70px">
            <?php echo"$NClient" ?>
            <img class="crayon" src="./IMG/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#c')">
            
        </div>
        <hr>
        <div class="line" id="d">
            <img src="./img/Icone_Mot_De_Passe.png" width="70" height="70px" >
            <?php echo"$NClient" ?>
            <img class="crayon" src="./IMG/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#d')">
            
        </div>
        <hr>
        <div class="line" id="e">
            <img src="./img/Icone_Telephone.png" width="70" height="70px">
            <?php echo"$NClient" ?>
            <img class="crayon" src="./IMG/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#e')">
           
        </div>
        <hr>
        <div class="line" id="f">
            <img src="./img/Icone_Livraison.png" width="70" height="70px">
            <?php echo"$NClient" ?>
            <img class="crayon"  src="./IMG/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1('#f')">
           
        </div>
    </div>
    </div>
</main>
<?php require 'footer.html'; ?>