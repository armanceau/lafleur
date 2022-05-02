<?php require 'header/header.php'; ?>

<!-- Liste déroulante catégories -->
<form method="GET" action="Listederoulante.php">
    <select name="code">
        <?php
        require 'connection.php';

        $sql = 'SELECT * FROM categorie';
        $table = $connection->query($sql);
        while ($ligne = $table->fetch()) {
            echo "<option value=".$ligne['code_de_la_categorie'].">".$ligne['nom_de_la_categorie']."</a></option>";
        }
            ?>
    </select>
    <button type="submit">Rechercher</button>
</form>

<!-- 3 fleurs les plus chère -->

<h2>Nos produit du moment</h2>

<?php

    $sql = 'SELECT * FROM produit  ORDER BY prix DESC LIMIT 3';
    $table = $connection->query($sql);
    while ($ligne = $table->fetch()) {
            $ref = $ligne['reference'];
            echo " <a href='details_produit.php?categ=$ref'style='text-decoration:none;color:black;'><br/><td><img src=\"IMG/".$ligne["photo"].".jpg\" alt=\"Photo Innexistante\" height=\"200px\" width=\"200px\">"."<br/>";
            echo "Référence: ".$ligne["reference"]."<br/>";
            echo "Nom: ".$ligne["designation"]."<br/>";
            echo "Prix: ".$ligne["prix"]."€<br/>";
            echo "Quantité: ".$ligne["quantite_en_stock"]."<br/>";
        
            echo "<a href=\"Panier.php?ref=".$ligne["reference"]." style=\"color:black;\"><button type=\"submit\" class=\"btn\">Ajouter au panier</button></a><br/></a>";

    }




require 'footer.html';