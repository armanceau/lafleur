
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
                        <div class="row"><div class="col-8">
                        
                        <boutton  type="button" class="btn btn-secondary" style="margin-left:10px; font-size:20px; background-color:silver; color:black;">Ajouter un commentaire<boutton>
                        </div></div>
                                                                                        <div class="commentaire_cont">
                                                                                            <div class="row">
                                                                                                <div class="col-md-4">
                                                                                                    <img src="img/user.jpg" style="height:110px;">
                                                                                                </div>
                                                                                                <div class="col-md-4" style="border-left: 1px solid gray;">
                                                                                            <p>Nom <br/><span style="color:gray;">poster il y a ...<span> </p>           
                                                                                            </div><div class="col-md-4"></div></div>
                                                                                                <p>locale_fi ter_matchesvnuiqvqivl qilbfd</p>
                                                                                        </div>
                                                                                        <div class="commentaire_cont">
                                                                                            <div class="row">
                                                                                                <div class="col-md-4">
                                                                                                    <img src="img/user.jpg" style="height:110px;">
                                                                                                </div>
                                                                                                <div class="col-md-4 "style="border-left: 1px solid gray;">
                                                                                            <p>Nom <br/><span style="color:gray;">poster il y a ...<span> </p>           
                                                                                            </div><div class="col-md-4"></div></div>
                                                                                                <p>locale_filter _matchesvnuiqvq ivlqilbfd</p>
                                                                                        </div>
                                                                                        <div class="commentaire_cont">
                                                                                            <div class="row">
                                                                                                <div class="col-md-4">
                                                                                                    <img src="img/user.jpg" style="height:110px;">
                                                                                                </div>
                                                                                                <div class="col-md-4 "style="border-left: 1px solid gray;">
                                                                                            <p>Nom <br/><span style="color:gray;">poster il y a ...<span> </p>           
                                                                                            </div><div class="col-md-4"></div></div>
                                                                                                <p>locale_filter_matchesvnuiqvqivlqilbfd Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed corrupti illo autem assumenda ullam magni iusto dolore nihil excepturi, debitis architecto provident neque eos quibusdam omnis! Enim perferendis impedit magnam?</p>
                                                                                        </div>
                     </div>
                </div>

        </div>
    </div>
    
</div>
<script>
      function openNav() {
        document.getElementById("mySidenav").style.display = "block";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.display = "none";
      }
      </script>
<?php 
include "footer.html";
?>


