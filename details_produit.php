
<?php 
require 'connection.php';
require 'htmlAssets\header.php'; 

$sql=$connection->prepare("SELECT * FROM produit WHERE reference = '".$_REQUEST['id']."';");
$sql->execute();
$ligne = $sql->fetchall();
foreach($ligne as $produit){
    $reference = $produit["reference"];
    $image = $produit["photo"];
    $designation = $produit["designation"];
    $prix = $produit["prix"];

?>

<div>
    <h2><?php echo $designation." ".$prix."€"; ?></h2>
</div>
<div>
    <p>description</p>
</div>

<div>
   <img src="assets/images/<?php echo $image;?>.jpg" alt="<?php echo $designation;?>">
</div>

<div>
    <?php echo '<a href="addbag.php?ref='.$reference.'"> <button type="button">';?><p>Ajoutez au panier </p></button></a>
</div>


<?php 
}
require 'htmlAssets\footer.html';
?>


