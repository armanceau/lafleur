<?php 
    require 'htmlAssets\header.php'; 
    require 'htmlAssets\navbarre.php';
?>


<div>
    <form method="GET" action="ListeProduit.php">
        <input type="text" name="recherche" placeholder="Déja une idée ?">
        <button type="submit">-></button>
    </form>    
</div>


<?php
    require 'htmlAssets\footer.html';
?>