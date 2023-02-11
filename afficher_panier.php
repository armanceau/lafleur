<?php

require 'htmlAssets\header.php'; 
include "connection.php";

if (!isset($_SESSION['login'])){
    header("location: Authentification.php");
    echo "here";
} else{

    $liste_produit = array();
    
    $sql = "SELECT `reference`,`quantite_d_article` FROM pannier WHERE mail_login = '".$_SESSION['login']."'";
    $table = $connection->query($sql);

    while ($ligne = $table->fetch()){
        array_push($liste_produit, $ligne['reference']);
        array_push($liste_produit, $ligne['quantite_d_article']);
    }

    $price = 0;

    echo '
    <main>
        <div class="p-4">
            <div class="panier-content">
                <hr style="border: solid 1px;">
                ';
                for ($i = 0; $i < count($liste_produit); $i += 2){

                    $sql = "SELECT * FROM produit WHERE reference = '".$liste_produit[$i]."'";
                    $table = $connection->query($sql);
        
                    while ($ligne = $table->fetch()){
                        echo '
                        <br/>
                        <div class="row">
                            <div class="col-2-md col-3">
                                <img class="photo_produit_panier" src="'.$ligne['photo'].'" alt="'.$ligne['photo'].'">
                            </div>
                            <div class="col-8-md col-7">
                                <figure>
                                    <blockquote class="blockquote">
                                        <p class="main_color title_prod">'.$ligne['designation'].'</p>
                                    <figcaption class="blockquote-footer">
                                        '.$ligne['reference'].'
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-2-md col-2">
                                <h4 class="main_color title_prod">'.number_format($ligne['prix'], 2, ',', ' ').' €</h4>
                                <input class="number_bag" type="text" value="'.$liste_produit[$i+1].'" style="text-align: right; border-radius: 20px;" disabled>
                                <br/><a href="delquantite.php?ref='.$ligne['reference'].'" class="btn"><img class="quantite-control" src="assets/icons/moins.png"></a>
                                <a href="addquantite.php?ref='.$ligne['reference'].'" class="btn"><img class="quantite-control" src="assets/icons/plus.png"></a><br/>
                                <a class="btn" href="destroy-bag.php?ref='.$ligne['reference'].'"><img class="poubelle-panier" src="assets/icons/poubelle.png"></a>
                            </div>
                        </div>
                        <br/>
                        <hr style="border: solid 1px;">
                        ';
                        $price += $ligne['prix'] * $liste_produit[$i+1];
                    }
                    
                }
                    
                echo '
                
                <form action="commande.php" method="post">
                    <input type="text" name="total" value="'.$price.'" hidden>
                    <div class="row">
                        <div class="col-9-sm col-10">
                        </div>
                        <div class="col-3-sm col-2">
                            <p class="title_prod">Total : <b>'.number_format($price, 2, ',', ' ').' €</b></p>
                            
                        </div>
                        <div class="col-9-sm col-10">
                        </div>
                        <div class="col-3-sm col-2">
                            ';
                            if ($price == 0){
                                echo '<a class="btn btn-success" href="shop.php">Chercher un produit</a>';
                            } else{
                                echo '<input class="btn btn-success" type="submit" value="Confirmer" style="margin-bottom: 10px">';
                                echo '<a class="btn btn-success" href="shop.php">Chercher un produit</a>';
                            }
                            echo '
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    ';

    require 'htmlAssets\footer.html'; }
?>
        
    </body>
</html>