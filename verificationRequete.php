<?php require 'header/header.php';?>

<div class = 'col-4 border' style ='padding-right : 10px; margin-top : auto; margin-right : auto; margin-left: auto;  margin-bottom : auto;'>
<p style="margin-top : 20px; margin-bottom : 20px; margin-left : 20px; margin-right : 20px; text-align: center;">
<?php
if($_REQUEST['estValide']){
    
    switch($_REQUEST['type']){
        
        case 'ajouterCategorie':
            echo'Votre catégorie a bien été ajouté';
            break;

        case 'ajouterProduit':
            echo'Votre produit a bien été ajouté';
            break;

        case 'modifierCategorie':
            echo'Votre catégorie a bien été modifié';
            break;

        case 'modifierProduit':
            echo'Votre produit a bien été modifié';
            break;

        case 'supprimerCategorie':
            echo'Votre catégorie a bien été supprimé';
            break;

        case 'supprimerProduit':
            echo'Votre produit a bien été supprimé';
            break;

    }


}else{

    switch($_REQUEST['type']){
        
        case 'ajouterCategorie':
            echo'Votre catégorie n\'a pas été ajoutée, veuillez vérifier les données entrées';
            break;

        case 'ajouterProduit':
            echo'Votre produit n\'a pas été ajoutée, veuillez vérifier les données entrées';
            break;

        case 'modifierCategorie':
            echo'Votre catégorie n\'a pas été modifié, veuillez vérifier les données entrées';
            break;

        case 'modifierProduit':
            echo'Votre produit n\'a pas été modifié, veuillez vérifier les données entrées';
            break;

        case 'supprimerCategorie':
            echo'Votre catégorie n\'a pas été supprimée, veuillez vérifier si des fleurs sont encore lié à cette catégorie';
            break;

        case 'supprimerProduit':
            echo'Votre produit n\'a pas été supprimée, veuillez contacter l\'agence ayant créée votre site';
            break;

    }

    
}
    echo'<br/><br/><br/><a class="btn btn-success" href="BackOffice.php">Retourner au BackOffice</a><br/>';
?>
</p>
</div>
<?php
require 'footer.html';
?>