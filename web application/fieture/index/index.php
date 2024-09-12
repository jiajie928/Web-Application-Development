<!-- created by: Chew_Jia_Jie -->
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../store/cardstyle.css">
        <title>Fietures Florist | Florist & Gift</title>
    </head>

    <body>
        <?php include('../header/header.php'); ?>
        <br/>
        <br/>
        <?php include('home_includes/slidshow.php'); ?>
        <?php include('../config/config.php'); ?>
        
        <?php
            $q1 = "SELECT * FROM flower WHERE discount !=0";
			$result1 = mysqli_query($db, $q1);
			$freshflower = array();
			
			if(!$result1)
				die("Invalid Query = get flower List: " . mysqli_error($db));
			while($row = mysqli_fetch_assoc($result1))
				$freshflower[] = $row;
        ?>

        <h1>SALE</h1>
        <div id = "container">
            <ul id = "card" class = "grid">    </ul>
                   
        <script>
            const   flower_list = <?php echo json_encode($freshflower); ?>;
            console.log(flower_list);
        </script>
        <script type = "text/javascript" src = "../store/main.js"> </script>
        <script>
            displayCards(flower_list);

        </script>

        
        
       
        

        <?php include('../footer/footer.php'); ?>
    </body>
    </html>