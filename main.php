<?php require 'header/header.php'; 
require 'navbarre.php';?>



<div class="container">

    <div class="row">

        <div class="col-1"></div>

        <div class="col-10 rounded row" style = "text-align : center; background-color : #C4C4C4; padding-top : 10px; margin-bottom : 30px;">
            <div class="col-3"></div>

            <div class="col-6">
                <h2 class = "rounded-pill" style ="background-color : white; font-family : lobster;">Nos produits du moment</h2>
            </div>

            <div class="col-3"></div>
        <br>


            <?php

                $sql = 'SELECT * FROM produit  ORDER BY pdt_prix DESC LIMIT 6';
                $table = $connection->query($sql);
                while ($ligne = $table->fetch()) {

                    $reference = $ligne["pdt_ref"];
                    $image = $ligne["pdt_image"];
                    $designation = $ligne["pdt_designation"];
                    $prix = $ligne["pdt_prix"];

                        echo "<div class = 'col-4 border border-dark rounded' style ='padding-right : 10px; margin-right : auto; margin-left: auto; background-color : white; margin-bottom : 10px'>";
                            echo "<br/><td><img src=\"IMG/".$image.".jpg\" alt=\"Photo Inexistante\" height=\"180px\" width=\"290px\" style = 'border-radius : 10px;'> "."<br><br>";
                            echo "<div class ='rounded' style = 'background-color : #006430;color: white; margin-bottom : 10px;padding-bottom : 10px;'";
                                echo "Référence : ".$reference."<br/>";
                                echo "Nom : ".$designation."<br/>";
                                echo "Prix : ".$prix."€ <br/>";
                                echo "<a href=\"addbag.php?ref=".$reference."\" style=\"color:black; margin-right :10px;\"><button style = 'background-color : #C4C4C4;' type='submit' class=\"btn rounded-pill\">Ajouter au panier</button></a>";
                                echo "<a href='details_produit.php?categ=$reference' style=\"color:black;\"><button style = 'background-color : #C4C4C4;' type='submit' class=\"btn rounded-pill\">Détails</button></a><br/>";
                            echo "</div>";

                        echo "</div>";
                }
                ?>
    
        </div>

        <div class="col-1"></div>
    </div>
</div>
<?php




require 'footer.html';