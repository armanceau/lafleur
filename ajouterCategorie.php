<?php require 'header/header.php'; ?>

<form method="GET"action="addCategorie.php">

<label>Catégories déja présente</label><br/>
<select >
<?php
        require 'connection.php';

        $sql = 'SELECT * FROM categorie';
        $table = $connection->query($sql);
        while ($ligne = $table->fetch()) {
            echo "<option>".$ligne['nom_de_la_categorie']."</option>";
        }
?>
</select><br/>


    <label>Ajouter le code de la Catégorie:</label><br/>
    <input type="text" name="codeCategorie" required><br/>

    <label>Ajouter le nom de la Catégorie:</label><br/>
    <input type="text" name="nomCategorie" required>


    <button type="submit">Ajouter Catégorie</button>

</form>



<?php require 'footer.html'; ?>