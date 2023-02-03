<?php 
    require 'htmlAssets\header.php'; 
?>

<div class="container home">
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <h2 id="homePresentation">Les <span class="spanGreen">plantes</span> représentent <br> la beauté de <br> la <span class="spanGreen">vie</span>.</h2>
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
            <div class="cont">
                <div class="div_white div_block" >

                
                </div>

                <?php
                require "connection.php";
                    $sql=$connection->prepare("SELECT * FROM produit WHERE produit.designation='Bonsai1' ORDER BY prix LIMIT 1 ");
                    $sql->execute();
                    $ligne = $sql->fetchall();

                    foreach($ligne as $produit){
                        $photo = $produit['photo'];
                        ?>
                            <div>
                                <img class="imgProfil" src="<?php echo $produit['photo'];?>" alt="<?php echo $produit['designation'];?>" height="531" width="427">
                            </div>
                        <?php
                    }
                ?>


                <div class="div_green div_block">
                
                </div>
                
            </div>

            <div class="row">
                <div class="col-4">
                    
                </div>

                <div class="col-8 desgProduit">
                    
                        <div class="row">
                            <div class="col-3 desgProduitDiv">
                                <a class="link"href="details_produit.php?id=<?php echo $produit['reference'];?>">
                                    <?php echo $produit['designation'];?>
                                </a> 
                            </div>
                            <div class="col-3 desgProduitDiv right">
                                <a class="link" href="details_produit.php?id=<?php echo $produit['reference'];?>">
                                    <img class="arrowButton" src="assets\icons\arrow.png" alt="flèche">
                                </a> 
                            </div>
                        <div class="col-6"></div> 
                    </a>    
                </div>
            </div>
            
        </div>


    </div>
</div>

<?php
    require 'htmlAssets\footer.html';
?>