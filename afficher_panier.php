
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css.css" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>

        <?php

        if (isset($_SESSION['login'])){
            header("location: accueil.php");
        } else{

            $liste_produit = array();
            
            $sql = "SELECT `panier` FROM user WHERE mail = ".$_SESSION['login'];
            $table = $connection->query($sql);

            $ligne = $table->fetch();
            $panier = $ligne['panier'];

            $objet = "";

            for ($i = 1; $i < strlen($panier); $i++){
                if (strcmp($panier[$i], " ")){
                    array_push($liste_produit, $objet);
                    $objet = "";
                }
                elseif (strcmp($panier[$i], ",")){
                    array_push($liste_produit, $objet);
                    $objet = "";
                }
                else{
                    $objet .= $panier[$i];
                }
            }



            echo '
            <div class="row p-4">
                <div class="panier-content">
                    <hr>
                    ';
                    for ($i = 1; $i < count($liste_produit); $i++){

                        $sql = "SELECT * FROM produit WHERE reference = ".$liste_produit[$i];
                        $table = $connection->query($sql);
            
                        $ligne = $table->fetch();



                        echo '
                        <div class="col-1">
                            <img src="'.$ligne['photo'].'" alt="photo">
                        </div><
                        <div class="col-10">
                            <h5>'.$ligne['designation'].'</h5>
                            <p>'.$ligne['reference'].'</p>
                        </div>
                        <div class="col-10">
                            <h5>'.$ligne['prix'].'</h5>
                        </div>
                        ';
                        
                    }
                        
                    echo '
                </div>
            </div>
            ';
        }

        ?>
        
    </body>
</html>