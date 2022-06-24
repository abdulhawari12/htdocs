<?php 
session_start();
$_SESSION = [];
session_destroy();
session_unset();
 setcookie('hide', '' , time() - 432000);
 setcookie('key', '', time() - 432000);
    header("Location : index.php");
    exit;
?>