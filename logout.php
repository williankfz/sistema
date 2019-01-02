<?php 

session_start();
$_SESSION = array();

    session_destroy();
 
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
     
    header('location:login.php');
	?>