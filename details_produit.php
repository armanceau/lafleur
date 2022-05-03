
<?php 
require 'connection.php';
include ("header/header.php"); 
$ref = $_REQUEST['categ'];
$sql = 'SELECT *  FROM produit WHERE reference like "%' . $ref . '%"' ;
$table = $connection->query($sql);
$ligne = $table->fetch();
$photo = $ligne['photo'];
$titre = $ligne['designation'];
$prix = $ligne['prix'];
?>
<div class="container-fluid detail-container">

    <div class="row">
    <div class="col-md-4 col-xs-12 text-center">
            <div class="photo">
                <?php echo "<img src='img/$photo.jpg'>";?>
            </div>
            <div class="previ text-center">
                <?php echo "<img src='img/$photo.jpg'>";
                echo "<img src='img/$photo.jpg'>";
                echo "<img src='img/$photo.jpg'>";
                echo "<img src='img/$photo.jpg'>";?>
            </div>

        </div>
        <div class="col-md-5 col-sm-12 col-xs-12 description">
            <br/>
             <h2 style="color: green;"><?php echo "<strong>". $titre . "</strong>" ;?>
                </h2>
                <p class="texte-description">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti aut perspiciatis sit nobis quidem eveniet commodi nisi dolor! Nostrum provident voluptates quos. Ab voluptates officiis nobis placeat illo consequatur suscipit! Lorem ipsum dolor sit amet consectetur </h2>
                    <h2>-adipisicing elit. Beatae at totam quibusdam cupiditate nobis esse quas odio. </h2>
                        <h2>-Natus aut a amet ad tenetur nobis sapiente, autem consectetur odit rem fuga?</h2><p>
        </div>
        <div class="col-md-3 col-sm-12">
           <?php echo '<a href="addbag.php?ref='.$ref.'"> <button type="button" class="btn btn-success btn-lg btn-block bouton_produit" style="border-radius:45px;height:auto;width:100%;">';?><p> <?php echo $prix ; ?>€</p></button></a>
                <div class="commentaire">
                    <div class="row">
                        <div class="col-3">
                        </div>
                        <div class="col-6">
                    <h2 class="com_titre text-center">Commentaires</h2>
                    </div>
                    <div class="col-3"></div>
                    </div>
                    <div class="com-deroul"> <hr/>
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


