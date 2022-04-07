<?php require 'header/header.html'; ?>

<!-- Liste déroulante catégories -->
<form method="GET" action="Listederoulante.php">
    <select name="code">
        <?php
        require 'connection.php';

        $sql = 'SELECT * FROM categorie';
        $table = $connection->query($sql);
        while ($ligne = $table->fetch()) {
            echo "<option value=".$ligne['code_de_la_categorie'].">".$ligne['nom_de_la_categorie']."</option>";
        }
            ?>
    </select>
    <button type="submit">Rechercher</button>
</form>


<?php

    $sql = 'SELECT * FROM produit  ORDER BY prix DESC LIMIT 3';
    $table = $connection->query($sql);
    while ($ligne = $table->fetch()) {
            echo "<br/><td><img src=\"IMG/".$ligne["photo"].".jpg\" alt=\"Photo Innexistante\" height=\"200px\" width=\"200px\">"."<br/>";
            echo "Référence: ".$ligne["reference"]."<br/>";
            echo "Nom: ".$ligne["designation"]."<br/>";
            echo "Prix: ".$ligne["prix"]."€<br/>";
            echo "Quantité: ".$ligne["quantite_en_stock"]."<br/>";
        
            echo "<a href=\"Panier.php?ref=".$ligne["reference"]." style=\"color:black;\"><button type=\"submit\" class=\"btn\">Ajouter au panier</button></a><br/>";

    }
?>




<?php require 'footer.html'; ?>

