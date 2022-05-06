<?php require 'header/header.php'; ?>




<body>
    <div class="container-fluid" style = "padding-top: 30px;">
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
