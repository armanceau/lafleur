<?php 
    require 'htmlAssets\header.php'; 
?>

<div class="container">
    <form method="GET">
        <?php
            require 'sqlconnect.php';

            $sql = 'SELECT * 
                FROM produit          
            ';
            echo "<div class=\"row\">";
            $table = $connection->query($sql);
            while ($ligne = $table->fetch()) {
                    $title = $ligne['projet_title'];
                    $annee = $ligne['projet_annee'];

                    
                        echo "<div class=\"col-4\">";

                            echo "<div class=\"card\" style=\"width: 25rem;\">";
                                echo '<img class=\"card-img-top\" src="'.$ligne["projet_photo"].'"/>';
                                echo "<div class=\"card-body\">";
                                    echo "<p class=\"card-text\">".$ligne["projet_type"]."</p>";
                                    echo "<div class=\"card-title row\">";

                                        echo "<div class=\"col-8\" style=\"font-weight: bold\">".$ligne["projet_title"];
                                        echo "</div>";

                                        echo "<div class=\"col-4\" style=\"font-weight: bold\">".$ligne["projet_annee"];
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                            echo "<br>";
                    echo "</div>";
            
            }
        ?>
    </form>
</div>

<?php
    require 'htmlAssets\footer.html';
?>