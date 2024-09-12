<!DOCTYPE html>
<html>
    <head>
        <title>My Account | Fieture</title>
        <link rel="stylesheet" href="" />
        <?php include('../header/header.php'); ?>
        <style>
            #header{
                text-align:center;
                font-size:2em;
                font-weight:bold;
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

            .invalid{
                border : 2px solid red;
                animation: warning 0.4s linear 3;
            }
            small{
                padding:5px;
            }
            .myform{
                display:block;
                padding-top:0;
                margin-bottom:1em;

            }
            @keyframes warning {
                from {box-shadow: 0 0 5px 2px red;}
                to {}
            }
            ::-ms-reveal { /*remove show password default by browser*/
                display: none;
            }
        </style>
    </head>

    <body>
        <p id='header'>Sign Up</p>
    
        <div class="center">        
            <form id="register" action="addUser.php" method="post" >
                
                <div class='myform'>
                    <label for="username">Username</laber><br>
                    <input type="text" id="username" name="username" onblur="validUsername()" required>
                    <small style="display:none;">Please enter a valid username!</small>
                </div>
                
                <div class='myform'>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="example@email.com" onblur="validEmail()" 
                    oninput="this.value = this.value.toLowerCase()" required>
                    <small style="display:none;">Please enter a valid email!</small>
                    <small id = "emailError" style="display:none;">Email already exists!</small>
                </div>

                <div class='myform'>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="pass" onblur="validPass()" required><br>
                    <small style="display:none;">Please enter a valid password.<br></small>
                    <small >Use <b>8</b> to <b>16</b> characters.</small><br>

                    <div style="display:inline-block;padding-top:5px;">
                        <input type="checkbox" onclick=showPass() style="width:1.2em;height:1.2em;position:absolute;">
                        <label style="position:relative;top:3px;left:1.5em">Show Password</label>
                    </div>
                </div>

                <div class='myform'>
                    <label for="confPass">Confirm Password</label><br>
                    <input type="password" name="confPass" id="confPass" onblur="validConfPass()" required>
                    <small style="display:none;">Please enter same password!</small>
                </div>

                <div class="center" style="text-align:center;">
                <input type="hidden" name="validresult" id="validresult" >
                <button id= "submit" type="submit">REGISTER </button>
                </div>
            </form>
            <br>
            <br>
            <br>
        </div>

        <script src="varifyRegister.js"></script>
        
        <?php include('../footer/footer.php'); ?>

    </body>
</html>