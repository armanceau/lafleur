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
        <div class="row" id="formSearchDetailProd">
            <div class="col-2"></div>
            <div class="col-8">                                
                <!-- Changer la redirection  -->
                <a href="">
                    <form class="inputSearch" method="GET" action="rechercheProduit.php">           
                        <input type="text" name="recherche" placeholder="Ajouter au panier" disabled>
                        <button class="buttonSubmitArrow" type="submit"><img class="arrowButton" src="assets\icons\arrow.png" alt="flèche"></button>
                    </form> 
                </a>
                
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row">
            <?php
            if(!isset($_REQUEST['categorie'])){
                $sql=$connection->prepare("SELECT * FROM produit ORDER BY prix DESC ");
                $sql->execute();
                $ligne = $sql->fetchall();

                foreach($ligne as $produit){
                    ?>
                    <div class="col-4">
                        <div class="card" style="width: 25rem;">

                        <div class="cont">
                            
                        </div>
                            <div>
                                <img src="<?php echo $produit['photo'];?>" alt="<?php echo $produit['designation'];?>" height="400" width="300">
                            </div>
                            <div>
                                <a href="details_produit.php?id=<?php echo $produit['reference'];?>"><button><?php echo $produit['designation'];?> -></button></a>
                            </div>
                    
                        </div>
                    </div>

                    <div class="cont">
                        <div class="div_white div_block" >

                    
                        </div>

                        <?php
                        require "connection.php";
                            $sql=$connection->prepare("SELECT * FROM produit WHERE produit.designation='".$produit['designation']."' ORDER BY prix LIMIT 1 ");
                            $sql->execute();
                            $ligne = $sql->fetchall();

                            foreach($ligne as $produit){
                                $photo = $produit['photo'];
                                ?>
                                    <div>
                                        <img class="imgProfil" src="<?php echo $produit['photo'];?>" alt="<?php echo $produit['designation'];?>" height="531" width="427">
                                    </div>
                                <?php
                            }
                        ?>


                        <div class="div_green div_block">
                        
                        </div>
                    
                    </div>


                        
                    


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
</div>

    <?php
}
require 'htmlAssets/footer2.html';
?>

