<!-- created by Chew Jia Jie -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Store</title>
        <?php include('../config/config.php'); ?>
        <link rel="stylesheet" href="cardstyle.css">

    </head>

    <body>
        <?php include('../header/header.php'); ?>
        <?php
            $q1 = "SELECT * FROM flower";
			$result1 = mysqli_query($db, $q1);
			$freshflower = array();
			
			if(!$result1)
				die("Invalid Query = get flower List: " . mysqli_error($db));
			while($row = mysqli_fetch_assoc($result1))
				$freshflower[] = $row;
        ?>

        <h1>Flower</h1>
        <div class = "container">
            <ul id = "card" class = "grid">    </ul>
                   
            <script>
                const   flower_list = <?php echo json_encode($freshflower); ?>;
                console.log(flower_list);
            </script>
            <script type = "text/javascript" src = "main.js"> </script>
            <script>
                displayCards(flower_list);

            </script>
       <div>

        
        <?php include('../footer/footer.php'); ?>
    </body>
</html>
