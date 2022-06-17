<?php
session_start(); 
if(isset($_SESSION['user_email'])) {
    unset($_SESSION['user_email']);
    unset($_SESSION['role']);
    session_destroy();
}

header("Location:../index.php");

?>