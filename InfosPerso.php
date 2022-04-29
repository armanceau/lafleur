<?php require 'header/header.php'; ?>
<script>

    function OnclickCrayon1(Status)
{   
    
    $( "div.line-1" ).replaceWith( ' <img src="./img/Icone_Profil.png" width="70" height="70"><input type="text" placeholder="<php $NClient ?>" >' );
}
    </script>
<main>
    <div class="container-info">
        <div class="line">
            <img src="./img/Icone_Profil.png" width="70" height="70">
            <p>Nom</p>
            <img src="./IMG/Icone_Crayon.png" width="80" height="70" onclick="OnclickCrayon1()">
           
        </div>
        <div class="line">
            <img src="./img/Icone_Profil.png" width="70" height="70px">
            <input type="text" placeholder="<php $NClient ?>">
            <img src="./IMG/Icone_Crayon.png" width="80" height="70">
            
        </div>
        <div class="line">
            <img src="./img/Icone_Mail.png" width="70" height="70px">
            <input type="text" placeholder="<php $NClient ?>">
            <img src="./IMG/Icone_Crayon.png" width="80" height="70">
            
        </div>
        <div class="line">
            <img src="./img/Icone_Mot_De_Passe.png" width="70" height="70px">
            <input type="text" placeholder="<php $NClient ?>">
            <img src="./IMG/Icone_Crayon.png" width="80" height="70">
            
        </div>
        <div class="line">
            <img src="./img/Icone_Telephone.png" width="70" height="70px">
            <input type="text" placeholder="<php $NClient ?>">
            <img src="./IMG/Icone_Crayon.png" width="80" height="70">
           
        </div>
        <div class="line">
            <img src="./img/Icone_Livraison.png" width="70" height="70px">
            <input type="text" placeholder="<php $NClient ?>">
            <img src="./IMG/Icone_Crayon.png" width="80" height="70">
           
        </div>
    </div>
</main>
<?php require 'footer.html'; ?>