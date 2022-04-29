<?php 
include 'header/header.php'; 
include 'check-connection.php';

if (!isset($_REQUEST['total'])){
    header("location: afficher_panier.php");
}
?>

<main>
    <div class="p-4">
        <form action="#" method="post">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <label for="card"><img class="card-img" src="header/images/card.png" alt="carte bancaire"></label>
                    <input class="champ-text-commande" type="text" name="card" id="card" placeholder="Numero De Carte">

                    <br/>

                    <label for="ccv"><img class="ccv-img" src="header/images/ccv.png" alt="ccv"></label>
                    <input class="champ-text-commande" type="text" name="ccv" id="ccv" placeholder="CCV">

                    <br/>

                    <label for="id"><img class="profil-img" src="header/images/card-profil.png" alt="id"></label>
                    <input class="champ-text-commande" type="text" name="id" id="id" placeholder="Titulaire De La Carte">

                    <br/>

                    <label for="livraison"><img class="livraison-img" src="header/images/livraison.png" alt="livraison"></label>
                    <input class="champ-text-commande" type="text" name="livraison" id="livraison" placeholder="Adresse De Livraison">

                    <br/>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-8">
                            <p class="total-price main_color" style="padding-top: 10px;">Total : <b><?php echo number_format($_REQUEST['total'], 2, ',', ' ');?>€</b></p>
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