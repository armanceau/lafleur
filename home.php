<?php 
    require 'htmlAssets\header.php'; 
?>


<div>
    <form method="GET" action="ListeProduit.php">
        <input type="text" name="recherche" placeholder="Déja une idée ?">
        <button type="submit">-></button>
    </form>    
</div>

<?php
require 'connection.php';

    $sql= $connection->prepare("SELECT * FROM produit ORDER BY prix LIMIT 1");
    $sql->execute();
    $ligne = $sql->fetchall();

    foreach($ligne as $produit){
        ?>
        <div>
          
          <img src="assets/images/<?php echo $produit['photo'];?>.jpg" alt="<?php echo $produit['designation'];?>">
          <a href="details_produit.php?id="<?php echo $produit['reference'];?>><button><?php echo $produit['designation'];?> -></button></a>
        </div>
        <?php
    }

    require 'htmlAssets\footer.html';
?>