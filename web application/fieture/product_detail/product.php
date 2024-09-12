<!-- created by Chew Jia Jie -->
<?php
    include_once('../config/config.php');
    $productid = $_GET['id'];
    $q1 = "SELECT * FROM flower WHERE id = " .$productid;
    $result = mysqli_query($db, $q1);
    
    if(!$result)
        die("Invalid Quey = get flower List: " . mysqli_error($db));

    $product = mysqli_fetch_assoc($result);
    $category = $product['category'];

    //get id from store page
    if(isset($_GET['id']))
    {
        $result = mysqli_query($db, $q1) or die("Error in Query" . mysql_error($db));
        
        if($result)
        {
            //Check if flower exists?
            if(mysqli_num_rows($result) == 0)
            {
                echo    "<script> 
                                alert('No record found. Please try again');
                                window.location.href='../index/index.php';
                                </script>";
            }
            else
            {
                $fetchedData    = mysqli_fetch_assoc($result);
                
                $id             = $fetchedData['id'];
                $name           = $fetchedData['name'];
                $ori_price      = $fetchedData['originalprice'];
                $category       = $fetchedData['category'];
                $subcategory    = $fetchedData['subcategory'];
                $description    = $fetchedData['description'];
                $image          = $fetchedData['image'];
                $rebate         = $fetchedData['discount'];
                $price          = $fetchedData['price'];
                
            }
        }
    }
    else
    {
        echo    "<script> 
                    alert('Invalid URL');
                    
                    </script>";
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel = "stylesheet" href = "productstyle.css">
        <link rel = "stylesheet" href = "../store/cardstyle.css">
        
        <!-- <link rel = "stylesheet" href = "popup.css"> -->
        <title><?php echo $name?></title>
            
            <?php
                session_start();
                if(isset($_POST["addToWishlist"]))
                {
                    if(isset($_SESSION['username']))
                    {
                        include('../config/config.php');
            
                        $username = $_SESSION['username'];
                        $pname = $product['name'];
                        $image = $product['image'];
                        $receiver = $_POST['receiver'];
                        $quantity = $_POST["quantity"];
                        $price = $product['price'];
            
                        $checkDuplicate = "SELECT quantity FROM wishlist WHERE 
                        username='$username' AND `image` = '$image' AND receiver = '$receiver' AND price = '$price'";
                        $duplicate = mysqli_query($db, $checkDuplicate);
                        $count = mysqli_fetch_assoc($duplicate);
                        if($duplicate-> num_rows > 0){
                            $quantity += $count['quantity'];
                            $update = "UPDATE wishlist SET quantity = $quantity WHERE username='$username' AND `image` = '$image' AND receiver = '$reciever' AND price = '$price'";
                            if($db->query($update) === False){
                                echo "Error:" . $db->error;
                            }
                        }else{
                            $addCart = "INSERT INTO `wishlist` VALUES (NULL,'$username','$pname','$image','$receiver','$quantity','$price');";
            
                            if($db->query($addCart) === False){
                                echo "Error:" . $db->error;
                            }
                        }			
            
                        echo "
                            <script>
                                alert('added to wishlist');
                                setTimeout(function(){window.close();}, 5000);
                            </script>
                            ";                
                        $db->close();
                    }else
                    {
                        $link = "../auth/login.php?location=" . urlencode($_SERVER['REQUEST_URI']);
                        echo "
                            <script>
                                window.location.href = '$link';
                            </script>
                            ";
                    }
                }    
            ?>
    </head>

    <body>
        <?php include('../header/header.php');?>

        <main class = "container">

            <!-- Left div -->
            <div class = "left-column">
                <img src=<?php echo $image ?> alt = "flower picture">
            </div>

            <!-- Right div -->
            <div class = "right-column">

                <div class = "flower-name">
                    <h1><?php echo $name ?></h1>
                    <p><?php echo $description ?></p>
                </div>

                <div class = "subcategory">
                    <span>Category: <span>
                    <span class = "s"><?php echo $subcategory ?> flower</span>
                </div>

                <!-- The oriprice & rebate price -->
                <div class = "rebate">
                    <p>Normal price:</p> 
                    <span>RM<?php echo $ori_price ?></span>
                    <span id = "discount">(-RM<?php echo $rebate ?>) </span>
                </div>
                
                <div class="purchaseForm">
                    <div class="content">
                        <form method = "POST" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
                            <div class = "to">
                                    <label for="receiver">To:</label><br>
                                    <input type="text" class="name" id="receiver"name="receiver" required><br><br>
                            </div>
                            <div>

                                <label for="sender">From:</label><br>
                                <input type="text" class="name" id="sender"name="sender" required><br><br>
                            </div>
                            <div>
                                <label for="shipment">Delivery Option:</label><br>
                                <select id="shipment"name="shipment" class="shipment"><br>
                                    <option value="pickup">Pick Up</option>
                                    <option value="delivery">Delivery</option>
                                </select><br><br>
                            </div>
                            <div>
                                <label for="phone">Receiver's Phone Number:</label><br>
                                <input type="tel" name="receiver'sPhone" placeholder="011-9122223" pattern="[0]{1}[1]{1}[0-9]{1}-[0-9]{7}" required><br><br>
                            </div>
                            <div>
                                <label for="date">Date:</label><br>
                                <input type="date" id="date"name="receiveDate"><br><br>
                            </div>
                            <div>
                                <label for="message">Message</label><br>
                                <textarea name="message" placeholder = "(Type your message to receiver)" id = "message"></textarea><br>
                                <span class = "char left">Maximum 500 characters</span>
                            </div>
                            Quantity:
                            <div class="containerfornum" style="margin-top:10px;">
                            <button type="button" id="decrement" onclick="stepper(this)" > - </button>
                                <input name="quantity" style="text-align:center;" type="number" min="1" max="100" step="1" value="1" id="quantity" readonly>
                            <button type="button" id="increment" onclick="stepper(this)" > + </button>
                            </div>
                            <!-- Real price -->
                            <div class = "real-price">
                                <span>
                                    <?php echo "RM $price"; ?>
                                </span>
                                <input type="submit" name="addToWishlist" value="Add to Wish List"class = "add-to-wishlist-btn"></input>
                            </div>
                        </form>
                </div>
            </div>    
        </div>
    </main> 
<script src ="numberButtons.js"></script>

    
    <?php include('../footer/footer.php'); ?>
    </body>
</html>