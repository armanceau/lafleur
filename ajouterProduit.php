<?php require 'header/header.php'; ?>

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
    <input type="text" name="referenceProduit" required><br/>
<br>
    <label>Ajouter la désignation du produit :</label><br/>
    <input type="text" name="designationProduit" required><br>
<br>
    <label>Ajouter la photo du produit :</label><br/>
    <input type="text" name="photoProduit" required><br/>
<br>
    <label>Ajouter le prix du produit :</label><br/>
    <input type="text" name="prixProduit" required><br/>
<br>
    <label>Ajouter la quantité en stock du produit :</label><br/>
    <input type="text" name="quantite_stock_Produit" required><br/>
<br>
    <label>Ajouter le code de la catégorie du produit :</label><br/>
    <input type="text" name="code_categorie_Produit" required><br/>
<br>

    <button type="submit">Ajouter le produit</button>

</form>



<?php require 'footer.html'; ?>