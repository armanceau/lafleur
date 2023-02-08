<?php 
require 'htmlAssets/header.php';
require 'connection.php';

?>

    <br>
    <div class="container" id="maxContainer">
        <div class="row">
            <div class="col-2"></div>
            <?php
                $sql=$connection->prepare("SELECT * FROM categorie ");
                $sql->execute();
                $ligne = $sql->fetchall();

                foreach($ligne as $categorie){
                    ?>
                    <div class="col-1 navCateg">
                        <a href="shop.php?categorie=<?php echo $categorie['code_de_la_categorie']?>"><?php echo $categorie['nom_de_la_categorie']?></a>
                    </div>
                    <div class="col-1"></div>
                    <?php
                }
            ?>
        </div>
    
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="row" id="formSearchHome">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <form class="inputSearch" method="GET" action="rechercheProduit.php">
                                    <input type="text" name="recherche" placeholder="Déja une idée ?">
                                    <button class="buttonSubmitArrow" type="submit"><img class="arrowButton" src="assets\icons\arrow.png" alt="flèche"></button>
                                </form> 
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div class="col-6"></div>
        </div>

        <br>

        <div class="row">
            <?php
            if(!isset($_REQUEST['categorie'])){
                $sql=$connection->prepare("SELECT * FROM produit ORDER BY prix DESC ");
                $sql->execute();
                $ligne = $sql->fetchall();

                foreach($ligne as $produit){
                    ?>
                    <div class="col-3 cardShop">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-3 priceShopDiv"><h2 class="priceShop"><?php echo $produit['prix']; ?>€</h2></div>
                            <div class="col-5"></div>
                            <div class="col-3"><h2>x<?php echo $produit['quantite_en_stock']; ?></h2></div>
                        </div>
                        <div class="row">
                            <div class="col-4 colImgShop">
                                <img class="imgShop" src="<?php echo $produit['photo'];?>" alt="<?php echo $produit['designation'];?>" height="300" width="240">
                            </div>

                            <div class="col-7 cardGreen">
                            
                            </div>

                            <div class="col-1"></div>
                        </div>


                        <div class="row">
                            <div class="col-4"></div>

                            <div class="col-7">
            
                                <div class="row">
                                    <div class="col-8 desgProduitShop right">
                    
                                        <div class="row">
                                            <div class="col-6 desgProduitDivShop">
                                                <a class="linkShop"href="details_produit.php?id=<?php echo $produit['reference'];?>">
                                                    <?php echo $produit['designation'];?>
                                                </a> 
                                            </div>
                                            
                                        <div class="col-6"></div> 
                                    </div>    
                                </div>
                                <div class="col-6"></div>     
                            </div>
                            
                            <div class="col-1"> </div>
                        </div>
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

