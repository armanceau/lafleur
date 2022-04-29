<?php require 'header/header.php'; ?>

<h1>La liste deroulante</h1>


<form method="GET" action="Panier.php">
<?php
    require 'connection.php';

            $sql = 'SELECT *  FROM produit WHERE code_de_la_categorie="'.$_REQUEST["code"].'"' ;
            $table = $connection->query($sql);
            while ($ligne = $table->fetch()) {
                ?>
                    <form method="GET" action="Panier.php">
                <?php
                    echo "<br/><td><img src=\"IMG/".$ligne["photo"].".jpg\" alt=\"Photo Innexistante\">"."<br/>";
                    echo "Référence: ".$ligne["reference"]."<br/>";
                    echo "Nom: ".$ligne["designation"]."<br/>";
                    echo "Prix: ".$ligne["prix"]."€<br/>";
                    echo "Quantité: ".$ligne["quantite_en_stock"]."<br/>";
                    echo '<a href="addbag.php?ref='.$ligne['reference'].'" class="btn btn-success">Ajouter au panier</a>';
                ?>
                    <br/>
        <?php
            }
        ?>

    
    
</form>
<button class="btn">Retour</button>

<?php require 'footer.html'; ?>


