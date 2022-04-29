<?php require 'header/header.html'; ?>

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
    require 'connection.php';
    $sql='SELECT * FROM produit ORDER BY prix';
    $table = $connection->query($sql);
    while ($ligne = $table->fetch()) {
        echo "<br/><td><img src=\"IMG/".$ligne["photo"].".jpg\" alt=\"Photo Innexistante\" width='200px' height='200px'>"."<br/>";
        echo "Nom de la fleur: ".$ligne["designation"]."<br/>";
        echo "Son prix: ".$ligne["prix"]."€<br/>";
    }



?>




<?php require 'footer.html'; ?>

