
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
        <div class="container_detail_produit">

        <div class="left-side">
            <div class="info_detail_produit">
                <div class="nom_detail_produit">
                    <p>BONSAI</p>
                </div>
                <div class="prix_detail_produit">
                    <p>45 $</p>
                </div>
            </div>
            
            <div class="description_detail_produit">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius officia, voluptate repellat quas ex necessitatibus neque exercitationem obcaecati culpa incidunt cum! Accusantium aliquam delectus blanditiis ex magnam esse libero labore.</p>
            </div>

            <div class="ajout_produit_panier">
                <div class="text_bouton">
                    <p>Ajouter au panier</p>
                </div>
                <div class="bouton_ajout_panier">
                    <a href="#"><img src="./assets/images/flèche.png" alt=""></a>
                </div>
            </div>
        </div>

        <div class="right-side">
            <img src="./assets/images/plantes-removebg-preview 1.png"  alt="image de remplissage">
        </div>

        </div>
        <!--
<div>
    <h2><?php //echo $designation." ".$prix."€"; ?></h2>
</div>
<div>
    <p>description</p>
</div>

<div>
   <img src="assets/images/<?php //echo $image;?>.jpg" alt="<?php //echo $designation;?>">
</div>

<div>
    <?php //echo '<a href="addbag.php?ref='.$reference.'"> <button type="button">';?><p>Ajoutez au panier </p></button></a>
</div>
-->

<?php 
}
require 'htmlAssets\footer.html';
?>


