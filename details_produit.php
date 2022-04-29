
<?php 
require 'connection.php';
include ("header/header.php"); 
$ref = $_REQUEST['categ'];
$sql = 'SELECT *  FROM produit WHERE reference like "%' . $ref . '%"' ;
$table = $connection->query($sql);
$ligne = $table->fetch();
$photo = $ligne['photo'];
$titre = $ligne['designation'];
?>
<div class="container-fluid" style="margin-top:125px;">

    <div class="row detail-produit">
        <div class="col-4 text-center">
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
        <div class="col-5 description" >
             <h2><?php echo $titre ;?>
                </h2>
        </div>
        <div class="col-3">
        <button type="button" class="btn btn-success btn-lg btn-block bouton_produit" style="border-radius:45px;height:auto;width:100%;"><p>15€</p></button>
                <div class="commentaire">
                    <h2 class="com_titre text-center">Commentaires</h2>
                    <div class="com-deroul">
                    <div class="commentaire_cont">
                        <div class="row">
                            <div class="col-4">
                                 <img src="img/exemple.jpg" style="height:110px;">
                            </div>
                            <div class="col-8">
                         <p>Nom <br/><span style="color:gray;">poster il y a ...<span> </p>           
                         </div></div>
                            <p>locale_filter_matchesvnuiqvqivlqilbfd</p>
                    </div>
                    <div class="commentaire_cont">
                        <div class="row">
                            <div class="col-4">
                                 <img src="img/exemple.jpg" style="height:110px;">
                            </div>
                            <div class="col-8">
                         <p>Nom <br/><span style="color:gray;">poster il y a ...<span> </p>           
                         </div></div>
                            <p>locale_filter_matchesvnuiqvqivlqilbfd</p>
                    </div>
                    <div class="commentaire_cont">
                        <div class="row">
                            <div class="col-4">
                                 <img src="img/exemple.jpg" style="height:110px;">
                            </div>
                            <div class="col-8">
                         <p>Nom <br/><span style="color:gray;">poster il y a ...<span> </p>           
                         </div></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, laudantium ipsum magni, rerum aperiam dolore reiciendis eum a animi exercitationem temporibus excepturi sunt necessitatibus dicta, rem sit eaque dignissimos facilis.</p>
                    </div>
                    <div class="commentaire_cont">
                        <div class="row">
                            <div class="col-4">
                                 <img src="img/exemple.jpg" style="height:110px;">
                            </div>
                            <div class="col-8">
                         <p>Nom <br/><span style="color:gray;">poster il y a ...<span> </p>           
                         </div></div>
                            <p>locale_filter_matchesvnuiqvqivlqilbfd</p>
                    </div>
            </div>
                </div>

        </div>
    </div>
    
</div>
    
<?php 
include "footer.html";
?>


