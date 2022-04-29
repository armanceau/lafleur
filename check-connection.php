<?php

if (!isset($_SESSION['login'])){
    header("location: Authentification.php");
}

?>