<?php require 'header/header.php'; 
    require 'connection.php';
?>

<form method="get" action="modifCategorie.php">

<!--slt c slt-->

<?php
$sql = 'SELECT nom_de_la_categorie FROM categorie WHERE code_de_la_categorie="'.$_REQUEST["code"].'"';
$table = $connection->query($sql);
while ($ligne = $table->fetch()) {
    echo '<h2> Catégorie '.$ligne['nom_de_la_categorie'].'</h2>';
}


$sql = 'SELECT * FROM categorie WHERE code_de_la_categorie="'.$_REQUEST["code"].'"';
$table = $connection->query($sql);
while ($ligne = $table->fetch()) {
    echo'<label>Code Catégorie:</label><br/>';
    echo '<input type="text" name="newCodeCategorie" value='.$ligne["code_de_la_categorie"].' required><br/><br/>';
    echo'<label>Nom Catégorie:</label><br/>';
    echo '<input type="text" name="newNomCategorie" value='.$ligne["nom_de_la_categorie"].' required><br/><br/>';
    echo '<input type"text" name="ancienCodeCateg" value="'.$_REQUEST["code"].'" hidden>';
}
?>

<button type="submit" class="btn btn-success">Modifier</button>
<a class="btn btn-success" href="BackOffice.php">Retour</a>

</form>

<?php require 'footer.html'; ?>



