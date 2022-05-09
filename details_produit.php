
<?php 
require 'connection.php';
include ("header/header.php"); 
require 'navbarre.php';
$ref = $_REQUEST['categ'];
$sql = 'SELECT *  FROM produit WHERE reference like "%' . $ref . '%"' ;
$table = $connection->query($sql);
$ligne = $table->fetch();
$photo = $ligne['photo'];
$titre = $ligne['designation'];
$prix = $ligne['prix'];
?>
<div class="container-fluid detail-container">

    <div class="row mx-auto">
    <div class="col-lg-4 col-md-5 col-xs-12 my-auto text-center">
            <div class="photo ">
                <?php echo "<img src='img/$photo.jpg'>";?>
            </div>
            <div class="previ text-center">
                <?php echo "<img src='img/$photo.jpg'>";
                echo "<img src='img/$photo.jpg'>";
                echo "<img src='img/$photo.jpg'>";
                echo "<img src='img/$photo.jpg'>";?>
            </div>
        </div>
        <div class="col-lg-5 col-md-7 col-xs-12"><div class="description">            
             <h1 style="color: green;"><?php echo "<strong>".$prix ;?>€ - <?php echo "". $titre . "</strong>" ;?></h1>
                <p class="texte-description">
                <h2>Nos fleurs sont élever et ceuillit dans nos locaux avec le plus grand soins, chaque bouquet est le fruit de plusieur heures de travaille ainsi que la coordination de toute notre équipe afin de vous satisfaire.</h2>
                    <h2>- Nous n'utilison pas de pesticide pour garantir que nos plantes reste natuelle.</h2>
                        <h2>- Nos fleurs mature dans nos serre</h2>
                        <h2>- Nos plants sont ceuillis a pleine maturation affin que vous puissiez le garder le plus longtemps possible</h2>
                        <h2>je sais plus quoi dire mais bon c'est pas grave je vais parler</h2><p>
</div> </div>
        <div class="col-lg-3 col-md-12">
           <?php echo '<a href="addbag.php?ref='.$ref.'"> <button type="button" class="btn btn-success btn-lg btn-block mx-auto bouton_produit" >';?><p>Ajoutez au panier </p></button></a>
                <div class="commentaire mx-auto">
                    <div class="row">

                        <div class="col-12 text-center">
                    <h2 class="com_titre mx-auto">Commentaires</h2>
                    </div>

                    </div>
                    <div class="com-deroul"> <hr/>
                    <marquee>cettez partie n'est pas finit</marquee>

                             
                             <?php 
                                $sql = 'SELECT * FROM commentaire inner join utilisateur on commentaire.User_mail = utilisateur.mail_login where idplante like "%'.$ref.'%"';
                                $table = $connection->query($sql);
                                while ($ligne = $table->fetch()) {
                                   ?>
                                    <div class="commentaire_cont">
                                     <div class="row">
                                        <div class="col-md-3">
                                            <img src="img/user.jpg" style="height:110px;">
                                        </div>
                                         <div class="col-md-7" style="border-left: 1px solid gray;">
                                                <p><?php echo "" .$ligne['nom'] ." " .$ligne["prenom"].""; ?><br/><span style="color:gray;">poster le <?php echo "" .$ligne['DateCommentaire'] . ""; ?><span> </p>           
                                         </div><div class="col-md-2"></div></div>
                                        <p><?php echo "".$ligne['contComment']. "";?></p>
                                        </div><?php } ?>
                                
                                <div class="row"><div class="col-8">
                                    <div class="commentaire_cont text-center">
                                        <form method="GET" action="Ajouter_com.php">
                                <label for="comm">votre commentaire</label>
                                <br/>
                            <input type="text" style="width:90%; height:150px;" maxlength="500" id="comm" name="comm">
                        <boutton  type="button" class="btn btn-secondary" style="margin-left:10px; font-size:20px; background-color:silver; color:black;">publier<boutton></form>
                        </div></div></DIV>
                     </div>
                </div>

        </div>
    </div>
    
</div>
<?php 
include "footer.html";
?>