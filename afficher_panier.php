<?php

include ("header/header.html");
session_start();
include "connection.php";

if (!isset($_SESSION['login'])){
    header("location: Authentification.php");
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
                <hr>
                ';
                for ($i = 0; $i < count($liste_produit); $i += 2){

                    $sql = "SELECT * FROM produit WHERE reference = '".$liste_produit[$i]."'";
                    $table = $connection->query($sql);
        
                    while ($ligne = $table->fetch()){
                        echo '
                        <br/>
                        <div class="row">
                            <div class="col-2-md col-3">
                                <img class="photo_produit_panier" src="IMG/'.$ligne['photo'].'.jpg" alt="'.$ligne['photo'].'">
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
                                <input class="number_bag" type="number" value="'.$liste_produit[$i+1].'">
                            </div>
                        </div>
                        <br/>
                        <hr>
                        ';
                        $price += $ligne['prix'] * $liste_produit[$i+1];
                    }
                    
                }
                    
                echo '
                <div class="row">
                    <div class="col-9-sm col-10">
                    </div>
                    <div class="col-3-sm col-2">
                        <p class="main_color title_prod">'.number_format($price, 2, ',', ' ').' €</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    ';

    include "footer.html";
}

?>
        
    </body>
</html>