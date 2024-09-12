<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="" />
        <?php include('../header/header.php'); ?>
        <style>
            p{
                text-align:center;
            }

            input{
                width:100%;
                vertical-align: middle;
                height:2em;
                padding:5px;
                border-radius:5px;
                margin-top:3px;
            }
            .center{
                width:70%;
                margin:auto;
            }
            ::-ms-reveal {
                display: none;
            } 
            .invalid{
                border : 2px solid red;
                animation: warning 0.4s linear 3;
            }
            @keyframes warning {
                from {box-shadow: 0 0 5px 2px red;}
                to {}
            }
            
        </style>
    </head>
    <body>
        <p>My Account | Fieture</p>
        <p style="font-size:30px;">Sign in to your account</p>

        <div>
            <?php 
                if (isset($_POST["signIn"]) && !empty($_POST["email"]) && !empty($_POST["password"])){

                    include('../config/config.php');

                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $hash = "";

                    $columns = $db->query("SELECT * FROM `user` WHERE `email`='$email'");
                    while($rows = $columns->fetch_assoc()){
                        $hash = $rows['password'];
                        $username = $rows['username'];
                    }


                    if (password_verify($password,$hash)){
                        $_SESSION['username'] = $username;
                        $_SESSION['timeout'] = time();
                        if(isset($_GET['location'])){
                            header("Location:".$_GET['location']);
                        }else{
                            header('Location: ../store/store.php');
                        }
                    }
                    else{
                        echo "<script>alert('Wrong email or password')</script>";
                    } 
                }
            ?>
        </div>

        <div class="center">        
            <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>"
             onsubmit="return validEmail()" method="post">
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email" placeholder="example@email.com" 
                onblur="validEmail()" onfocus="this.classList.remove('invalid')" required>
                <small style="display:none;">Please enter a valid email!</small>
                <br>
                <br>

                <label for="password">Password</label><br>
                <input type="password" name="password" id="pass" required>
                <div style="display:inline-block;padding-top:5px;">
                    <input type="checkbox" onclick=showPass() style="width:1.2em;height:1.2em;position:absolute;">
                    <label style="position:relative;top:3px;left:1.5em">Show Password</label>
                </div>
                <br>
                <br>

                <div class="center" style="text-align:center;">
                    <button type="submit" name="signIn">Sign In</button>
                </div>
                <br>
                <br>
                <br>
                <br> 
            </form> 
            
            <div class="center" style="text-align:center;">
                <p>Don't have an account?</p>
                <button onclick="location.href='signup.php'" style="width:10%;">Register</button>
                <br>
                <br>
                <br>
            </div>
        </div>

        <script>
            function showPass(){
                let pass = document.getElementById("pass");
                if (pass.type === "password"){
                    pass.type = "text";
                }
                else{
                    pass.type = "password";
                }
            }

            function validEmail(){
                var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                let email = document.getElementById("email");
                if (!emailPattern.test(email.value)){
                    email.classList.add("invalid");
                    email.nextElementSibling.style.display = "inline"
                    return false;
                }else
                {
                    email.classList.remove("invalid");
                    email.nextElementSibling.style.display = "none"
                    return true;
                }
            }
        </script>
	   
       <?php include('../footer/footer.php'); ?>
    </body>
</html>