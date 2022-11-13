<?php
session_start();

if (!$_SESSION['user']){
    header('location: includes/sesion/login.php');
}
else
{
    header('location: views/index.php');
}   

?>