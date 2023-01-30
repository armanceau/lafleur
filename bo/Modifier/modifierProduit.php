<?php require 'header/header.php'; 
    require 'connection.php';
?>

<form method="get" action="modifProduit.php">

<?php


$sql = 'SELECT * FROM produit WHERE reference="'.$_REQUEST["reference"].'"';
$table = $connection->query($sql);
while ($ligne = $table->fetch()) {
    echo '<h2> Produit: '.$ligne['designation'].'</h2>';

    echo'<label>Référence:</label><br/>';
    echo '<input type="text" name="newReference" value="'.$ligne["reference"].'" required><br/><br/>';

    echo'<label>Désignation:</label><br/>';
    echo '<input type="text" name="newDesignation" value="'.$ligne["designation"].'" required><br/><br/>';

    echo'<label>Nom Photo:</label><br/>';
    echo '<input type="text" name="newPhoto" value="'.$ligne["photo"].'"><br/><br/>';

    echo'<label>Prix:</label><br/>';
    echo '<input type="text" name="newPrix" value="'.$ligne["prix"].'" required><br/><br/>';

    echo'<label>Quantité en stock:</label><br/>';
    echo '<input type="text" name="newQuantite" value="'.$ligne["quantite_en_stock"].'" required><br/><br/>';

    echo'<label>Code du produit actuelle: '.$ligne['code_de_la_categorie'].'</label><br/>';

    echo'<select name="code">';
    $sql = 'SELECT * FROM categorie';
    $table = $connection->query($sql);
    while ($ligne = $table->fetch()) {
        echo "<option value=".$ligne['code_de_la_categorie'].">".$ligne['nom_de_la_categorie']."</option>";
    }
    echo'</select><br/><br/>';



    echo '<input type"text" name="ancienReference" value="'.$_REQUEST["reference"].'" hidden>';
}
?>


<button type="submit" class="btn btn-success">Modifier</button>
<a class="btn btn-success" href="BackOffice.php">Retour</a>

</form>

<?php require 'footer.html'; ?>



