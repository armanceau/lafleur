

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet'>
        <link href='css.css' rel='stylesheet'>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
        <link rel="icon" type="image/png" href="IMG\logolafleur.png">
        <title>La Fleur</title>
<body>
    
</body>
</html>


<body>
    <div class="container-fluid" style = "padding-top: 30px; margin-top : -20px; ">
        <div class="row">

            <div class="col-1"></div>

            <div class="col-10 rounded-pill row" style = "padding-top : 10px;padding-bottom : 10px; background-color : #006430;">
                

                <div class="col-4">
                    <!-- Liste déroulante catégories -->
                    <form method="GET" action="Listederoulante.php" style ="margin-left : 10px;border-top-radius: 10px; border-bottom-radius: 10px;">
                        <select name="code">
                            <?php
                                require 'connection.php';

                                $sql = 'SELECT * FROM categorie';
                                $table = $connection->query($sql);

                                while ($ligne = $table->fetch()) {
                                    echo "<option value=".$ligne['code_de_la_categorie'].">".$ligne['nom_de_la_categorie']."</a></option>";
                                }
                            ?>
                        </select>
                        <button type="submit">Rechercher</button>
                        
                    </form>
                    
                </div>

                <div class="col-4" style = "text-align : end;">
                    
                    
                </div>
                
                <div class="col-4 rounded-pill" style="text-align: end;">  
                    <div style="font-size: 15px;font-family: lobster; color : white;background-color: #006430;">                 
                        <input type="text" name="recherche" placeholder="Rechercher :" required >
                        <button type="submit">Rechercher</button>
                    </div>
                    
                </div>
            </div>

            <div class="col-1"></div>
        </div>
    </div>
