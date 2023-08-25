<!DOCTYPE html>

<?php

	include('../templates/connect.php');
	
	if(empty($_POST['addCart'])){
		
	}else{

		$itemName = "Marvel Avengers: The Ultimate Character Guide";
		$qtyInput = mysqli_real_escape_string($conn, $_POST['addCart']);
		$itemPrice = '700';
		$totalItemPrice = $qtyInput * $itemPrice;
		$orderDate = date("Y-m-d H:i:s");  
		
		$sql = "INSERT INTO orders(Item,Qty,UnitPrice,TotalPrice,OrderDate) VALUES('$itemName','$qtyInput', '$itemPrice', '$totalItemPrice','$orderDate')";
		
		if(mysqli_query($conn, $sql)){
		}else{
			echo 'query error: ' . mysqli_error($conn);
		}
	}

	
	mysqli_close($conn);
?>

<html lang = "en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Avengers: The Ultimate Character Guide</title>
		
		<link rel="stylesheet" href="../mycss.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>

	<body>
	
		
		<?php include '../templates/productsNavigationBar.php';?>
		
		<div class="product">
		
			<div class="productPage singleProduct">
			
				<div class="booksRow">
				
					<div class="bookContainer">
						<img src="images/book9.jpg" width="100%">
					</div>
					
					<div class="bookContainer">
						
						<p>Alan Cowsill</p>
					
						<h1>Marvel Avengers: The Ultimate Character Guide</h1>
						
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						
						<h4>₱700.00</h4> 
						
						<form action="page9.php" method="POST" name = "form" onsubmit="return addedToCart()">
							<input type = "number" name="addCart" value="1"min="1" max="99" required>
							
							<input type="submit" name="submit" value="Add to Cart" class="btn"></input> 
						</form>
						
						<h3>Book Description</h3>
						
						<p>Find out everything you need to know about your favorite Marvel Avengers super heroes and villains. This hefty, information-packed guide takes you alphabetically through the Avengers universe, shedding new light on characters such as Iron Man, Spider-Man, Wolverine, Thor, and Captain America, and providing more detail on their powers, weaknesses, enemies, and origins than any other book on the market.</p>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="relatedPage">
		
			<div class="productContainer">
			
				<h2 class = "title">Related Books</h2>
				
				<div class="booksRow">
				
					<?php include '../templates/productCard2.php';?>
					
					<?php include '../templates/productCard4.php';?>
					
					<?php include '../templates/productCard5.php';?>
					
				</div>
			</div>
		</div>
		

		<?php include '../templates/footer.php';?>
		
	<script src="../myjs.js" type="text/javascript"></script>
	
	</body>

</html>