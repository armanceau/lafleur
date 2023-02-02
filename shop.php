<?php 
require 'htmlAssets/header.php';
require 'connection.php';



$sql=$connection->prepare("SELECT * FROM categorie ");
    $sql->execute();
    $ligne = $sql->fetchall();

    foreach($ligne as $categorie){
        ?>
        <div>
            <a href="shop.php?categorie=<?php echo $categorie['code_de_la_categorie']?>"><?php echo $categorie['nom_de_la_categorie']?></a>
        </div>
        <?php
    }
        ?>

        <div class="container">
            <div class="row">

                <form class="inputSearch" method="GET" action="rechercheProduit.php">
                    <input type="text" name="recherche" placeholder="Déja une idée ?">
                    <button class="buttonSubmitArrow" type="submit"><img class="arrowButton" src="assets\icons\arrow.png" alt="flèche"></button>
                </form> 

                <br>

                <?php
                if(!isset($_REQUEST['categorie'])){
                    $sql=$connection->prepare("SELECT * FROM produit ORDER BY prix DESC ");
                    $sql->execute();
                    $ligne = $sql->fetchall();

                    foreach($ligne as $produit){
                        ?>
                        <div class="col-4">
                            <div>
                            <img src="<?php echo $produit['photo'];?>" alt="<?php echo $produit['designation'];?>" height="400" width="300">
                            </div>
                            <div>
                                <a href="details_produit.php?id=<?php echo $produit['reference'];?>"><button><?php echo $produit['designation'];?> -></button></a>
                            </div>
                        </div>

                        <br>

                        <?php
                    }
                }else{
                    $sql=$connection->prepare("SELECT * FROM produit WHERE code_de_la_categorie='".$_REQUEST['categorie']."'");
                    $sql->execute();
                    $ligne = $sql->fetchall();

                    foreach($ligne as $produit){
                        ?>
                        <div>
                            <div>
                                <h2><?php echo $produit['designation'];?></h2>
                            </div>
                            <div>
                                <img src="<?php echo $produit['photo'];?>" alt="<?php echo $produit['designation'];?>">
                            </div>
                            <div>
                                <a href="details_produit.php?id=<?php echo $produit['reference'];?>"><button><?php echo $produit['designation'];?> -></button></a>
                            </div>
                        </div>

                        <?php
                    }
                    ?>

            </div>
        </div>
    </div>
</div>


<br>
<br>
<br>
<br>





    <?php
    }
require 'htmlAssets/footer.html';
?>

