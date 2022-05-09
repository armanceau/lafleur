<?session_start()
var_dump( $_SESSION['mail']);
$sql = 'Insert into commentaire vlaues (""' ;
$table = $connection->query($sql);
$ligne = $table->fetch();