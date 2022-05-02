<?php require 'header/header.php'; ?>

<form method="get" action="modifCategorie">

<?php
require 'connection.php';

$sql = 'SELECT * FROM produit WHERE reference='.$_REQUEST["code"];
$table = $connection->query($sql);
while ($ligne = $table->fetch()) {
    echo "<input type=\"text\" name=\"codeCategorie\" required><br/>".$ligne["code_de_la_categorie"]."</input>";
    echo "<input type=\"text\" name=\"nomCategorie\" required><br/>".$ligne["nom_de_la_categorie"]."</input>";
}
?>

<button type="submit"></button>
</form>


<?php require 'footer.html'; ?>