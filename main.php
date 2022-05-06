<?php require 'header/header.php'; 
require 'navbarre.php';?>

<div class="row">
<div class="container-fluid">

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

                $sql = 'SELECT * FROM produit  ORDER BY prix DESC LIMIT 6';
                $table = $connection->query($sql);
                while ($ligne = $table->fetch()) {
                    $ref =$ligne["reference"];
                        echo "<div class = 'col-4 border border-dark rounded' style ='padding-right : 10px; margin-right : auto; margin-left: auto; background-color : white; margin-bottom : 10px'>";
                            echo "<br/><td><img src=\"IMG/".$ligne["photo"].".jpg\" alt=\"Photo Inexistante\" height=\"180px\" width=\"290px\" style = 'border-radius : 10px;'> "."<br><br>";
                            echo "<div class ='rounded' style = 'background-color : #006430;color: white; margin-bottom : 10px;padding-bottom : 10px;'";
                                echo "Référence : ".$ligne["reference"]."<br/>";
                                echo "Nom : ".$ligne["designation"]."<br/>";
                                echo "Prix : ".$ligne["prix"]."€ <br/>";
                                echo "Quantité disponible : ".$ligne["quantite_en_stock"]."<br/><br>";
                                echo "<a href=\"addbag.php?ref=".$ligne["reference"]."\" style=\"color:black; margin-right :10px;\"><button style = 'background-color : #C4C4C4;' type='submit' class=\"btn rounded-pill\">Ajouter au panier</button></a>";
                                echo "<a href='details_produit.php?categ=$ref' style=\"color:black;\"><button style = 'background-color : #C4C4C4;' type='submit' class=\"btn rounded-pill\">Détails</button></a><br/>";
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