<?php 
    require 'htmlAssets\header.php'; 
?>

<div class="container home">
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <h2 id="homePresentation">Les <span class="spanGreen">plantes</span> représentes <br> la beauté de <br> la <span class="spanGreen">vie</span>.</h2>
                    <div class="row" id="formSearchHome">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <form class="inputSearch" method="GET" action="rechercheProduit.php">
                                <input type="text" name="recherche" placeholder="Déja une idée ?">
                                <button class="buttonSubmitArrow" type="submit"><img class="arrowButton" src="assets\icons\arrow.png" alt="flèche"></button>
                            </form> 
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="col-6">
            <div class="row">
                <div class="col-6">
                     <?php
                    require "connection.php";
                        $sql=$connection->prepare("SELECT * FROM produit WHERE produit.designation='Bonzai' ORDER BY prix LIMIT 1 ");
                        $sql->execute();
                        $ligne = $sql->fetchall();

                        foreach($ligne as $produit){
                            $photo = $produit['photo'];
                            ?>
                                <div>
                                    <img src="<?php echo $produit['photo'];?>" alt="<?php echo $produit['designation'];?>" height="531" width="427">
                                    <a href="details_produit.php?id=<?php echo $produit['reference'];?>"><button><?php echo $produit['designation'];?> -></button></a>
                                </div>
                            <?php
                        }
                    ?>
                </div>
                <div class="col-6">


                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require 'htmlAssets\footer.html';
?>