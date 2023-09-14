<?php require 'header/header.php'; 
require 'connection.php';?>

<label>Ajouter une catégorie</label>
<a href="ajouterCategorie.php"><button>Ajouter</button></a>

<br/><br/>


<label>Ajouter un produit</label>
<a href="ajouterProduit.php"><button>Ajouter</button></a>

<br/><br/>


<label>Modifier une catégorie</label>

<form method="GET" action="modifierCategorie.php">
    <select name="code">
        <?php
        

        $sql = 'SELECT * FROM categorie';
        $table = $connection->query($sql);
        while ($ligne = $table->fetch()) {
            echo "<option value=".$ligne['code_de_la_categorie'].">".$ligne['nom_de_la_categorie']."</option>";
        }
            ?>

    </select><br/>
    <br>
    <button type="submit">Modifier</button>
</form>


<br/><br/>


<label>Modifier un produit</label>
<form method="GET" action="modifierProduit.php">
    <select name="ref">
        <?php
        

        $sql = 'SELECT * FROM produit';
        $table = $connection->query($sql);
        while ($ligne = $table->fetch()) {
            echo "<option value=".$ligne['reference'].">".$ligne['designation']."</option>";
        }
            ?>

    </select><br/>
    <br>
    <button type="submit">Modifier</button>
</form>
<br/><br/>


<label>Supprimer une catégorie</label>
<form method="GET" action="supprimerCategorie.php">
    <select name="code">
        <?php
        

        $sql = 'SELECT * FROM categorie';
        $table = $connection->query($sql);
        while ($ligne = $table->fetch()) {
            echo "<option value=".$ligne['code_de_la_categorie'].">".$ligne['nom_de_la_categorie']."</option>";
        }
            ?>

    </select><br/>
    <br>
    <button type="submit">Supprimer</button>
</form>

<br/><br/>


<label>Supprimer un produit</label>

<form method="GET" action="supprimerProduit.php">
    <select name="ref">
        <?php
        
        $sql = 'SELECT * FROM produit';
        $table = $connection->query($sql);
        while ($ligne = $table->fetch()) {
            echo "<option value=".$ligne['reference'].">".$ligne['designation']."</option>";
        }
            ?>

    </select><br/>
    <br>
    <button type="submit">Supprimer</button>
</form>


<br/><br/>



<?php require 'footer.html'; ?>