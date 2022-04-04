
<?php 
require 'connection.php';
include ("header/header.html"); 
?>
<div class="container-fluid">
    <div class="row ">
        <div class="col-4 text-center">
            <div class="photo">
                <img src="img/exemple.jpg">
            </div>
            <div class="previ">
            <img src="img/exemple.jpg">
            <img src="img/exemple.jpg">
            <img src="img/exemple.jpg">
            <img src="img/exemple.jpg">
            </div>
        </div>
        <div class="col-5 text-center description">
             <h2><?php /* $sql = 'SELECT designation  FROM produit WHERE ;
				$table = $connection->query($sql);
				while ($ligne = $table->fetch()) {
                    ?>
                        <form method="GET" action="Panier.php">
                    <?php
						echo "<br/><td><img src=\"IMG/".$ligne["photo"].".jpg\" alt=\"Photo Innexistante\">"."<br/>";
                        echo "Référence: ".$ligne["reference"]."<br/>";
						echo "Nom: ".$ligne["designation"]."<br/>";
						echo "Prix: ".$ligne["prix"]."<br/>";
                        echo "Quantité: ".$ligne["quantite_en_stock"]."<br/>";
                    ?>
                        <button type="submit">Ajouter au panier</button>
                        <br/>
            <?php
                }*/?> 
                </h2>
        </div>
        <div class="col-3">
        <button type="button" class="btn btn-success btn-lg btn-block bouton_produit" style="border-radius: 50px;height:80px;width:400px;"><h1>15€</h1></button>

        </div>
    </div>
    
</div>
    

    <?php 
    include "footer.html";
    ?>


