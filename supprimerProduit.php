<?php require 'header/header.php'; 
      require "connection.php";

$ref=$_REQUEST['reference'] ;
$design=$_RQUEST['designation'] ;

$sql = $connection->prepare("DELETE FROM 'produit' WHERE reference=".$ref." AND designation=".$design." ") ;
$sql->bindParam('[{.$ref}]', $ref, PDO::PARAM_INT) ;

?>
    
<?php require 'footer.html'; ?>