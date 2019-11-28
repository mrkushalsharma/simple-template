<?php
    session_start();
    if(!$_SESSION["loggedin_user"]){
        header('location:login.php');
    }
?>