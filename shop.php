<?php 
require 'htmlAssets/header.php';
require 'connection.php';

if(!isset($_REQUEST['categorie'])){
    $sql=$connection->prepare("SELECT * FROM produit ORDER BY prix DESC LIMIT 3 ");
    $sql->execute();
    $ligne = $sql->fetchall();

    foreach($ligne as $produit){
        ?>
        <div>
            <div>
                <h2><?php echo $produit['designation'];?></h2>
            </div>
            <div>
            <img src="assets/images/<?php echo $produit['photo'];?>.jpg" alt="<?php echo $produit['designation'];?>">
            </div>
            <div>
                <a href="details_produit.php?id=<?php echo $produit['reference'];?>"><button><?php echo $produit['designation'];?> -></button></a>
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
                <img src="assets/images/<?php echo $produit['photo'];?>.jpg" alt="<?php echo $produit['designation'];?>">
            </div>
            <div>
                <a href="details_produit.php?id=<?php echo $produit['reference'];?>"><button><?php echo $produit['designation'];?> -></button></a>
            </div>
        </div>

        <?php
    }
    ?>






    <?php
    }
require 'htmlAssets/footer.html';
?>

