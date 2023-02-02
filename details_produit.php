
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
    $description = $produit["description"];
    $prix = $produit["prix"];
?>
    <div class="container home">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-10">

                        <div class="row" id="formSearchHome">
                            <div class="col-2"></div>
                            <div class="col-8 cardTitle">                                
                                <!-- Changer la redirection  -->
                                <div class="row">
                                    <div class="col-8">
                                        <h2 class="TitlteDetailProd"><?php echo $produit['designation'];?></h2>
                                    </div>

                                    <div class="col-4 priceDetailProd">
                                        <h2 class="TitlteDetailProd "><?php echo $produit['prix'];?> $</h2>
                                    </div>

                                </div>
                                
                            </div>
                            <div class="col-2"></div>
                        </div>              
                                    
                            


                        
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="description_detail_produit">
                                    <p id="detailPresentation"><?php echo $produit['description'];?></p>              
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                        
                        <div class="row" id="formSearchHome">
                            <div class="col-2"></div>
                            <div class="col-8">                                
                                <!-- Changer la redirection  -->
                                <a href="">
                                    <form class="inputSearch" method="GET" action="rechercheProduit.php">
                                        
                                            
                                        
                                        <input type="text" name="recherche" placeholder="Ajouter au panier" disabled>
                                        <button class="buttonSubmitArrow" type="submit"><img class="arrowButton" src="assets\icons\arrow.png" alt="flèche"></button>
                                    </form> 
                                </a>
                                
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
                        $sql=$connection->prepare("SELECT * FROM produit WHERE produit.designation='".$produit['designation']."' ORDER BY prix LIMIT 1 ");
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
                        
                    </div>
                    <div class="col-6"></div>   
                </div>
            </div>
        </div>
    </div>
    
<?php 
}
require 'htmlAssets\footer.html';
?>


