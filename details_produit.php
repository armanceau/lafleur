
<?php 
require 'connection.php';
require 'htmlAssets\header.php'; 

$sql=$connection->prepare("SELECT * FROM produit WHERE reference = '".$_REQUEST['id']."';");
$sql->execute();
$ligne = $sql->fetchall();
foreach($ligne as $produit){
    $reference = $produit["reference"];
    $image = $produit["photo"];
    $designation = $produit["designation"];
    $description = $produit["description"];
    $prix = $produit["prix"];
?>
        <div class="container_detail_produit">

            <div class="left-side">
                <div class="info_detail_produit">
                    <div class="nom_detail_produit">
                        <p><?php echo $produit['designation'];?></p>
                    </div>
                    <div class="prix_detail_produit">
                        <p><?php echo $produit['prix'];?> $</p>
                    </div>
                </div>
                
                <div class="description_detail_produit">
                    <p><?php echo $produit['description'];?></p>              
                </div>

                <div class="ajout_produit_panier">
                    <div class="text_bouton">
                        <p>Ajouter au panier</p>
                    </div>
                    <div class="bouton_ajout_panier">
                        <a href="addbag.php?ref=<?php echo $produit['reference'];?>"><img src="./assets/icons/arrow.png" alt="" style="width:5rem; margin-left:0.8rem; margin-top:-0.2rem;" ></a>
                    </div>
                </div>
            </div>

            <div class="right-side">

                <div class="div_green_detail_produit">
                    <?php
                    require "connection.php";
                        $sql=$connection->prepare("SELECT * FROM produit WHERE produit.designation='".$designation."'");
                        $sql->execute();
                        $ligne = $sql->fetchall();

                        foreach($ligne as $produit){
                            $photo = $produit['photo'];
                            ?>
                            <div>
                                <div id="product">
                                    <img id="img_detail_produit" src="<?php echo $produit['photo'];?>" alt="<?php echo $produit['designation'];?>">
                                </div>
                            <?php
                        }
                    ?>

                </div>
                    
            </div>

        </div>

<?php 
}
require 'htmlAssets\footer.html';
?>


