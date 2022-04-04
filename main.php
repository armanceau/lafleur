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







<?php require 'footer.html'; ?>

