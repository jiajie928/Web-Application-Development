<!DOCTYPE html>
<html>
	<header>
		<title>Fieture</title>
		
		<link rel="stylesheet" href=""/>
		<?php include('../header/header.php');?>
		<!--change remove "include config"-->
		<style>
			.content {
				/*border: 1px solid red;*/
				display: flex;
				justify-content: center;
				align-items: flex-start;
				padding: 50px;
			}
			
			.cart-container {
				/*border: 1px solid red;*/
				margin: 25px;
				width: 60vw;
			}
			
			.cart-container h2{
				font-receiver: 50px;
				margin-top: 0px;
			}
			
			.summary-container {
				/*border: 1px solid red;*/
				background-color: #f2f2f2;
				margin: 25px;
				width: 40vw;
				padding: 0 25px;
			}
			.summary-container div{
				//border: 1px solid red;
				line-height: 50px;
				display: flex;
				justify-content: space-between;
			}
			
			.summary-container input[type="submit"] {
				border: 3px solid black;
				background-color: white;
				padding: 15px;
				width: 80%;
				margin: 25px auto;
			}
			.summary-container input[type="submit"]:hover {
				background-color: black;
				border-color: white;
				color: white;
				cursor: pointer;
			}
			
			#cart {
			  font-family: Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			#cart td, #cart th {
			  border: none;
			  padding: 8px;
			  border-bottom: 1px solid black;
			}
			
			#cart td:first-child {
				text-align: center;
			}

			#cart th {
			  padding-top: 12px;
			  padding-bottom: 12px;
			  border-top: 1px solid black;
			  text-align: left;
			}
			
			#cart img {
				max-height: 200px;
				max-width: 200px;
				display: block;
				margin: auto;
			}

		</style>
		
	</header>
	
	<body>
		<!--change-->
		<?php
			if(!isset($_SESSION['username'])){
				echo "
				<script>
				window.location.href = '../auth/login.php';
				</script>";
			}
		?>

		<div class="content">
			<div class="cart-container">
			<h2>Your wishlist</h2>
				<table id="cart">
					<tr>
						<th>Item</th>
						<th>Receiver</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>
				</table>
			</div>
		<!---change-->
		<?php
			include('../config/config.php');
			
			$username = $_SESSION['username'];

			if (isset($_POST['delImage']) && isset($_POST['delReceiver'])){
				$delImage = $_POST['delImage'];
				$delReceiver = $_POST['delReceiver'];
				$del = "DELETE FROM wishlist WHERE UserName = '$username' AND `image` = '$delImage' AND receiver = '$delReceiver'";
				if($db->query($del) === false){
					die("Invalid Query = get flower List: " . mysqli_error($db));
				}
			}
			
			$q1 = "SELECT * FROM wishlist WHERE username = '$username'" ;
			$result = mysqli_query($db, $q1);			
			if(!$result){
				die("Invalid Query = get flower List: " . mysqli_error($db));
			}
			
			$list = "[";
			$total = 0.00;
			while($product = mysqli_fetch_assoc($result)) {
				$pname = $product['pname'];
				$image = $product['image'];
				$receiver = $product['receiver'];
				$quantity = $product['quantity'];
				$price = $product['price'];
				$total += $price * $quantity;
				$list .= "{image:'$image',pname:'$pname',receiver:'$receiver',quantity:'$quantity',price:'$price'},";
			}
			$list = substr($list,0,-1) . "]"; //remove last comma

			echo"<script>var list = $list; const total = $total;</script>"
			

		?>
           
        
			<div class="summary-container">
				<h2>Summary</h2>
				<div>
					<span>Subtotal</span>
					<span>RM<?php echo $total ?></span>
				</div>
				<div>
					<span>
						<?php
                            
							
						?>
					</span>
				</div>
				<hr>
				<div>
					<span>Total</span>
					<span>
						RM
						<?php 
							echo number_format((float)($total), 2, '.', '');
						?> 
					</span>
				</div>
				
				<div>
					<input type="submit" value="Checkout">
				</div>
			</div>
		</div>

		<script>
			// change
			
			makeCart(list, total);
			
			function makeCart(items, subtotal) {
				const table = document.getElementById("cart");
				
				items.forEach(item => {
					const row = document.createElement("TR");
					const td1 = document.createElement("TD");
					const td2 = document.createElement("TD");
					const td3 = document.createElement("TD");
					const td4 = document.createElement("TD");
					const image = document.createElement("IMG");
					image.src="../product_images/"+item.image;
					td1.appendChild(image);
					td1.appendChild(document.createTextNode(item.pname));
					td2.innerHTML = item.receiver;
					td3.innerHTML = item.quantity;
					td4.innerHTML = "RM" + (item.price*item.quantity).toFixed(2) + `<small onclick='remove("${item.image}","${item.receiver}")' style='color:red;cursor:pointer;'><br><br>Remove</small>`; //change
					row.appendChild(td1);
					row.appendChild(td2);
					row.appendChild(td3);
					row.appendChild(td4);
					table.appendChild(row);
				})
				const row = document.createElement("TR");
				const td1 = document.createElement("TD");
				const td2 = document.createElement("TD");
				const td3 = document.createElement("TD");
				const td4 = document.createElement("TD");
				td4.innerHTML = "Subtotal: RM" + subtotal.toFixed(2); //change
				row.appendChild(td1);
				row.appendChild(td2);
				row.appendChild(td3);
				row.appendChild(td4);
				table.appendChild(row);

				
			}

			//change
			function remove(image,receiver){				
				document.getElementById('delImage').value = image;
				document.getElementById('delReceiver').value = receiver;
				document.getElementById('delForm').submit();
			}

		</script>

		<form id = "delForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="hidden" name="delImage" id="delImage">
			<input type="hidden" name="delReceiver" id="delReceiver">
		</form>

		
		<?php include('../footer/footer.php'); ?>
	</body>
	
</html>