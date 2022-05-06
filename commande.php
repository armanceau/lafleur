<?php
include 'header/header.php';
include 'check-connection.php';
include 'connection.php';

if (!isset($_REQUEST['total'])){
    header("location: afficher_panier.php");
}


if (!empty($_REQUEST['bon'])){
    header('location: bon_de_reduction.php?code='.$_REQUEST['bon']);
}

$total = $_REQUEST['total'];

$sql = 'SELECT * FROM utiliser WHERE mail_login ="'.$_SESSION["login"].'"' ;
$table = $connection->query($sql);
$ligne = $table->fetch();

if (!empty($ligne)){
    $sqlv2 = 'SELECT * FROM bon_de_reduction WHERE code_de_reduction ="'.$ligne["code_de_reduction"].'"' ;
    $tablev2 = $connection->query($sqlv2);
    $lignev2 = $tablev2->fetch();
    $reduction = $lignev2['valeur_de_renduction_en_pourcentage'];
    $reduction = $total * $reduction / 100;
    $total -= $reduction;
}
?>

<main>
    <div class="p-4">
        <form action="#" method="post">
            <div class="row">
                <div class="col-3"></div>
                    <div class="col-6" style = "text-align : center; background-color : #C4C4C4; padding-top : 30px;">

                        <div class ="rounded-pill" style="font-size: 30px;font-family: lobster; color : white;background-color: #006430;">

                            <label for="card"><img class="card-img" src="header/images/card.png" alt="carte bancaire"></label>
                            <input class="champ-text-commande col-12 col-md-12 col-md-12 col-lg-12 col-xl-12" type="text" name="card" id="card" placeholder="Numero De Carte">
                        </div>

                    <br/>


                        <div class ="rounded-pill" style="font-size: 30px;font-family: lobster; color : white;background-color: #006430;">
                           
                            <label for="ccv"><img class="ccv-img" src="header/images/ccv.png" alt="ccv"></label>
                            <input class="champ-text-commande col-12 col-md-12 col-md-12 col-lg-12 col-xl-12" type="text" name="ccv" id="ccv" placeholder="CCV">
                        </div>
                    <br/>


                        <div class ="rounded-pill" style="font-size: 30px;font-family: lobster; color : white;background-color: #006430;">
                           
                            <label for="id"><img class="profil-img" src="header/images/card-profil.png" alt="id"></label>
                            <input class="champ-text-commande col-12 col-md-12 col-md-12 col-lg-12 col-xl-12" type="text" name="id" id="id" placeholder="Titulaire De La Carte">
                        </div>
                    <br/>


                        <div class ="rounded-pill" style="font-size: 30px;font-family: lobster; color : white;background-color: #006430;">
                           
                            <label for="livraison"><img class="livraison-img" src="header/images/livraison.png" alt="livraison"></label>
                            <input class="champ-text-commande col-12 col-md-12 col-md-12 col-lg-12 col-xl-12" type="text" name="livraison" id="livraison" placeholder="Adresse De Livraison">
                        </div>  
                    <br/>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-8">
                            <p class="total-price main_color" style="padding-top: 10px;">Total : <b><?php echo number_format($total, 2, ',', ' ');?>€</b></p>
                        </div>
                        <div class="col-4">
                            <input type="submit" class="btn btn-dark" value="Confirmer">
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </form>
    </div>
</main>

<?php include 'footer.html'; ?>