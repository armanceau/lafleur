<?php 
    require 'htmlAssets\header.php'; 
    require 'htmlAssets\navbarre.php';

    require 'connection.php';

    $sql= $connection->prepare("SELECT * FROM produit WHERE designation LIKE '%".$_REQUEST['recherche']."%';");
    $sql->execute();
    $ligne = $sql->fetchall();

    foreach($ligne as $produit){
        ?>
        <div>
          <h3><?php echo $produit['designation'];?></h3>
          <img src="<?php echo $produit['photo'];?>" alt="<?php echo $produit['designation'];?>">
          <a href="details_produit.html?id="<?php echo $produit['reference'];?>><button>-></button></a>
        </div>
        <?php
    }
?>



<?php
    require 'htmlAssets\footer.html';
?>