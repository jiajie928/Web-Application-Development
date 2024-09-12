<?php
    require_once('../config/config.php');    
    session_start();
    if(isset($_SESSION["username"]))
    {
        session_destroy();
        header('Location: ../index/index.php');
    }
?>