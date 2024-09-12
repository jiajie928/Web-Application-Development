<!DOCTYPE html>
<html>
    <head>
    <?php
        include('../config/config.php');


        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $encryptPass = password_hash($password,PASSWORD_BCRYPT);
        
        $addUser = "INSERT INTO `user`
        VALUES (NULL,'$username','$email','$encryptPass');";

        if($db->query($addUser) === False){
            header("refresh:3; ");
            echo "Error:" . $db->error;
        }

        header("refresh:3; url=../index/index.php");
        echo "Successfully register. <br>
        Redirecting to login page...";
        
        $db->close();

    ?>
    </head>
    <body>
        
    </body>
</html>