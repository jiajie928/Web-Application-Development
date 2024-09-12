<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Icon Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="../store/cardstyle.css">

        <title> Fieture </title> 
    </head>

    <body>

        <?php include('../header/header.php');?>

        <br>
        <br>
        <br>

        <div class="container">
            <ul id="card" class="grid"></ul>
        </div>

        <div id="error"></div>

        <br>
        <br>
        <br>

        <!-- footer -->


        <!-- JS Scripts -->
        <script type="text/javascript" src="search.js"></script>
      
        <!-- PHP Script - to convert database data into JSON -->
        <?php
            $db = mysqli_connect("localhost", "root", "", "fieture") or die('Could not connect');
            $sql = "SELECT * FROM flower";
            $results = mysqli_query($db, $sql);
            $json_array = array();

            if($results){
                while ($row = mysqli_fetch_assoc($results)) {
                  
                    $json_array[] = $row;
                }
                
                $encoded = json_encode($json_array);

                if (@$_GET['query']) {
                    $query = $_GET['query'];
                    echo "
                    <script type='text/javascript'>
                        flowerList=$encoded;
                        search('$query');
                    </script>";
                }
            }

            else{
                echo "Not working";
            }
        ?>
    </body>
</html>