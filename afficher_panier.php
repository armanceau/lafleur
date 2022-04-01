<?php

include ("header/header.html");
session_start();
include "connection.php";

if (!isset($_SESSION['login'])){
    header("location: accueil.php");
} else{

    $liste_produit = array();
    
    $sql = "SELECT `reference`,`quantite_d_article` FROM pannier WHERE mail_login = '".$_SESSION['login']."'";
    $table = $connection->query($sql);

    while ($ligne = $table->fetch()){
        array_push($liste_produit, $ligne['reference']);
        array_push($liste_produit, $ligne['quantite_d_article']);
    }

    echo '
    <main>
        <div class="p-4">
            <div class="panier-content row">
                <hr>
                ';
                for ($i = 0; $i < count($liste_produit); $i += 2){

                    $sql = "SELECT * FROM produit WHERE reference = '".$liste_produit[$i]."'";
                    $table = $connection->query($sql);
        
                    while ($ligne = $table->fetch()){
                        echo '
                        <div class="col-2">
                            <img src="IMG/'.$ligne['photo'].'.jpg" alt="'.$ligne['photo'].'" height="150" width="auto">
                        </div>
                        <div class="col-8">
                            <figure>
                                <blockquote class="blockquote">
                                    <a>'.$ligne['designation'].'</a>
                                <figcaption class="blockquote-footer">
                                    '.$ligne['reference'].'
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-2">
                            <h5>'.$ligne['prix'].' €</h5>
                        </div>
                        <hr>
                        ';
                    }
                    
                }
                    
                echo '
            </div>
        </div>
    </main>
    ';

    include "footer.html";
}

?>
        
    </body>
</html>