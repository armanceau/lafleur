<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégorie</title>
</head>
<body>
    <h1>La liste deroulante</h1>


    <form method="GET" action="Panier.php">
    <?php
        require 'connection.php';

				$sql = 'SELECT *  FROM produit WHERE code_de_la_categorie="ros"' ;
				$table = $connection->query($sql);
				while ($ligne = $table->fetch()) {
                    ?>
                        <form method="GET" action="Panier.php">
                    <?php
						echo "<br/><td><img src=\"IMG/".$ligne["photo"].".jpg\" alt=\"Photo Innexistante\">"."<br/>";
                        echo "Référence: ".$ligne["reference"]."<br/>";
						echo "Nom: ".$ligne["designation"]."<br/>";
						echo "Prix: ".$ligne["prix"]."<br/>";
                        echo "Quantité : <br/>".$ligne["quantite_en_stock"]."<br/>";
                    ?>
                        <button type="submit">Ajouter au panier</button>
                        <br/>
            <?php
                }
            ?>
    
        
        
    </form>




    <button>Retour</button>

</body>
</html>
