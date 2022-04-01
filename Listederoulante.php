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
        require 'connexion.php';

				$sql = 'SELECT *  FROM produit WHERE pdt_categorie="ros"' ;
				$table = $connection->query($sql);
				while ($ligne = $table->fetch()) {
                    ?>
                        <form method="GET" action="Panier.php">
                    <?php
						echo "<br/><td><img src=\"images/".$ligne["pdt_image"].".jpg\">"."<br/>";
                        echo "Référence: ".$ligne["pdf_ref"]."<br/>";
						echo "Nom: ".$ligne["pdt_designation"]."<br/>";
						echo "Prix: ".$ligne["pdt_prix"]."<br/>";
                        echo "Quantité : <br/>";
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
