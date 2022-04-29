<?php require 'header/header.html'; ?>

<form method="GET"action="addProduit.php">

<label>Produits déja présent</label><br/>
<select >
<?php
        require 'connection.php';

        $sql = 'SELECT * FROM produit';
        $table = $connection->query($sql);
        while ($ligne = $table->fetch()) {
            echo "<option>".$ligne['designation']."</option>";
        } 
?>
</select><br/>

<br>
    <label>Ajouter la réference du produit :</label><br/>
    <input type="text" name="réference produit" required><br/>
<br>
    <label>Ajouter la désignation du produit :</label><br/>
    <input type="text" name="désignation produit" required><br>
<br>
    <label>Ajouter la photo du produit :</label><br/>
    <input type="text" name="réference produit" required><br/>
<br>
    <label>Ajouter le prix du produit :</label><br/>
    <input type="text" name="réference produit" required><br/>
<br>
    <label>Ajouter la quantité en stock du produit :</label><br/>
    <input type="text" name="réference produit" required><br/>
<br>
    <label>Ajouter le code de la catégorie du produit :</label><br/>
    <input type="text" name="réference produit" required><br/>
<br>

    <button type="submit">Ajouter le produit</button>

</form>



<?php require 'footer.html'; ?>