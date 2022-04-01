<?php

$sql = "SELECT `panier` FROM user WHERE mail = ".$_SESSION['login'];
$table = $connection->query($sql);

while ($ligne = $table->fetch()) {
    $panier = $ligne['panier'];
}

if (empty($panier)){
    $panier = $_REQUEST['ref'];
}
else {
    $panier .= ", ".$_REQUEST['ref']." 1";
}

$sql = "UPDATE `tache` SET `panier` = ". $_REQUEST['ref'] ."
WHERE `mail` = ".$_SESSION['login'];

header("location: panier.php");

?>