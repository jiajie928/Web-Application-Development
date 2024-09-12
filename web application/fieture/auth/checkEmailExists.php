<?php
    include('../config/config.php');

    if (isset($_GET['q'])){
        $email = $_GET['q'];
        $result = $db->query("SELECT `Email` FROM `user` WHERE `Email`='$email'");

        if ($result -> num_rows > 0){
            echo false;
        }else
        {
            echo true;
        }
        $db->close();
    }  
?>