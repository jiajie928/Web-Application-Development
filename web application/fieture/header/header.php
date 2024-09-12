<!-- created by Chew_Jia_Jie -->
<html>
    <head>
        <meta charset = "UTF-8">
        <meta content = "width=device-width, innitial-scale=1.0">
        <link rel = "stylesheet" href = "../header/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<?php 
    if(session_status() === PHP_SESSION_NONE)
        session_start();
?>
    <body>
        <div class = "top-search">
            <ul id="right-nav">
						<?php 
							if (isset($_SESSION['username']))
								echo "<li><a href='../auth/logout.php'><i class='fa fa-sign-out'></i>Logout</a></li>";
							else 
								echo "<li><a href='../auth/login.php'><i class='fa fa-user-o'></i> Sign In</a></li>";
						?>
                      
                      <?php 
                            if(isset($_SESSION['username']))
                            {
                                $username = $_SESSION['username'];
                                echo "<p id='username'>Welcome, $username</p>";
                            }
                            else
                                echo "<p>guest</p>";
                            
                        ?>
            <div class="search-container">
                <form method="POST" action="../search/search_script.php">
                    <input id="searchBar" type="text" placeholder="Search..." name="search" required>
                    <button id="searchButton" type="submit" ><i class="fa fa-search"></i></button>
                </form>
            </div>

        </div>

        <header>
            <div class = "navbar" id = "navbar">
                <a id = "logoHover" href = "../index/index.php" >
                    <div class = "navbar-left">
                        <img id = "logo" src = "../header/logo.png" alt = "Logo">
                    </div>
                </a>
            
                <div class = "navbar-right">
                        <a href = "../store/store.php">Shop</a>
                        <a href = "../contact/contact.php">Contact Us</a>
                        <a href = "../wishlist/Wishlist.php">Wish List</a>    
                </div>
            </div>

        </header>
        
        <!-- <script>
            window.onscroll = function(){stickyNavbar()};

            var navbar;
            var sticky;

            navbar = document.getElementsByClassName("navbar")[0];
            sticky = navbar.offsetTop;

            function stickyNavbar()
            {
                if(window.pageYOffset >= sticky)
                    navbar.classList.add("sticky");
                else
                    navbar.classList.remove("sticky");
                
            } -->
        <!-- </script> -->
    </body>
</html>
