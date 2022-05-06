<?php require 'header/header.php'; 
require 'connection.php';?>
<div class='col-10'>
    <div class='col-4 border' style =''>
        <label>Ajouter une catégorie</label><br/><br/>
        <a href="ajouterCategorie.php"><button class="btn btn-success">Ajouter</button></a>
    </div>

    <div  class='col-4 border' style =''>
        <label>Modifier une catégorie</label>
        <form method="GET" action="modifierCategorie.php">
            <select name="code">
                <?php
                

                $sql = 'SELECT * FROM categorie';
                $table = $connection->query($sql);
                while ($ligne = $table->fetch()) {
                    echo "<option value=".$ligne['code_de_la_categorie'].">".$ligne['nom_de_la_categorie']."</option>";
                }
                    ?>

            </select><br/>
            <br>
            <button class="btn btn-success" type="submit">Modifier</button>
        </form>
    </div>

    <div class='col-4 border' style =''>
        <label>Supprimer une catégorie</label>
        <form method="GET" action="supprimerCategorie.php">
            <select  name="code">
                <?php
                

                $sql = 'SELECT * FROM categorie';
                $table = $connection->query($sql);
                while ($ligne = $table->fetch()) {
                    echo "<option value=".$ligne['code_de_la_categorie'].">".$ligne['nom_de_la_categorie']."</option>";
                }
                    ?>

            </select><br/>
            <br>
            <button class="btn btn-success" type="submit">Supprimer</button>
        </form>
    </div>



</div>

<div class='col-10'>

    <div  class='col-4 border' style ='margin-top: 10px;'>
        <label>Ajouter un produit</label><br/><br/>
        <a href="ajouterProduit.php"><button class="btn btn-success">Ajouter</button></a>
    </div>


    <div  class='col-4 border' style =''>
        <label>Modifier un produit</label>
        <form method="GET" action="modifierProduit.php">
            <select name="reference">
                <?php
                

                $sql = 'SELECT * FROM produit';
                $table = $connection->query($sql);
                while ($ligne = $table->fetch()) {
                    echo "<option value=".$ligne['reference'].">".$ligne['designation']."</option>";
                }
                    ?>

            </select><br/>
            <br>
            <button class="btn btn-success" type="submit">Modifier</button>
        </form>
    </div>

    <div class="col-4 border">
        <label>Supprimer un produit</label>
        <form method="GET" action="supprimerProduit.php">
            <select name="ref">
                <?php
                
                $sql = 'SELECT * FROM produit';
                $table = $connection->query($sql);
                while ($ligne = $table->fetch()) {
                    echo "<option value=".$ligne['reference'].">".$ligne['designation']."</option>";
                }
                    ?>

            </select><br/>
            <br>
            <button class="btn btn-success" type="submit">Supprimer</button>
        </form>
        </div>


</div>


<?php require 'footer.html'; ?>