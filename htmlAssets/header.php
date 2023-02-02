<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css\bootstrap-5.2.3-dist\css\bootstrap.css">
        <link href='css\style.css' rel='stylesheet'>
        <link rel="icon" type="image/png" href="assets\icons\logolafleur.png">
        <title>LaFleur</title>
    </head>

    <body>
        <header>
            <div class="container header">
                <div class="row">
                    <div class="col-2">
                        <div class="row">
                            <div class="col-4">
                                <img src="assets\icons\rmbg_logoLaFleur.png" alt="logo" height="56.95" width="100">
                            </div>
                            
                            <div class="col-3">
                                <h1>LaFleur</h1>
                            </div>

                            <div class="col-5">

                            </div>
                        </div>
                    </div>

                    <div class="col-10" id="colDescend">
                        <div class="row">
                            <div class="col-3">
                                <a class="link" href="home.php">
                                    <h2>Accueil</h2> 
                                </a>
                            </div>
                            <div class="col-3">
                                <a class="link" href="shop.php">
                                    <h2>Shop</h2> 
                                </a>
                            </div>
                            <div class="col-3">
                                <a class="link" href="Authentification.php">
                                    <h2>Profil</h2> 
                                </a>
                            </div>
                            <div class="col-3">
                                <a class="link" href="afficher_panier.php">
                                    <h2>Panier</h2> 
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>


            <!-- <div class="container-fluid"style ="background-color: black;">
                <div class="row align-items-start">

                    <div class="col-4"></div>

                    <div class="col-4">
                            <h1>
                                <a href="main.php" style="color: white;">La Fleur</a>
                            </h1>
                    </div>

                    <div class="col-4" style="text-align: right;" >
                        
                        <?php 
                        
                        session_start();

                        if (isset($_SESSION['login'])){
                            echo '
                            <a href="deco.php"><img src="header/images/deco.png"  height="50" width="50"></a>';
                        }
                        
                        ?>
                        <a href="<?php

                        if (isset($_SESSION['login'])){
                            echo 'infosPerso.php';
                        } else {
                            echo 'Authentification.php';
                        }
                        
                        ?>"><img src="header/images/util.PNG"  height="50" width="50"></a>
                        <a href="afficher_panier.php"><img src="header/images/shop.PNG" height="45" width="45" class="rounded float-end"></a>
                    </div>

                </div>
                
            </div> -->
        </header>