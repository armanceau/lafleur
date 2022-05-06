<?php
 
 require 'connection.php' ;
  
 $articles = $connection -> query('SELECT designation, photo, prix, quantite_en_stock FROM produit ORDER BY reference');
    if(isset($_GET['recherche']) AND !empty($_GET['recherche'])) {
        $recherche = htmlspecialchars($_GET['recherche']);
        $articles = $connection->query('SELECT designation, photo, prix, quantite_en_stock FROM produit WHERE designation LIKE "%'.$recherche.'%" ORDER BY reference');
        
    }

 ?>

 <?php if($articles) { ?>
    <ul>
    <?php while($a = $articles->fetch()) { ?>
       <li><?= $a['designation'] ?></li>
       <br>
       <li><?= $a[' photo'] ?></li>
       <br>
       <li> prix : <?= $a['prix'] ?> €</li>
       <br>
       <li>actuelement <?= $a['quantite_en_stock'] ?> articles en stock</li>
       <br>
       <br>
    <?php } ?>
    </ul>
    
 <?php } else { ?>
 Aucun résultat pour: <?= $recherche ?>...
 <?php } ?>

