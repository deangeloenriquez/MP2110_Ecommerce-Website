<!DOCTYPE html>

<?php

	include('../templates/connect.php');
	
	if(empty($_POST['addCart'])){
		
	}else{

		$itemName = "National Geographic Magazine (April 2013): Reviving Extinct Species";
		$qtyInput = mysqli_real_escape_string($conn, $_POST['addCart']);
		$itemPrice = '200';
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
		
		<title>National Geographic Magazine </title>
		
		<link rel="stylesheet" href="../mycss.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>

	<body>
	
		
		<?php include '../templates/productsNavigationBar.php';?>
		
		<div class="product">
		
			<div class="productPage singleProduct">
			
				<div class="booksRow">
				
					<div class="bookContainer">
						<img src="images/book6.jpg" width="100%">
					</div>
					
					<div class="bookContainer">
						
						<p>National Geographic</p>
					
						<h1>National Geographic Magazine (April 2013): Reviving Extinct Species</h1>
						
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						
						<h4>₱200.00</h4> 
						
						<form action="page6.php" method="POST" name = "form" onsubmit="return addedToCart()">
							<input type = "number" name="addCart" value="1"min="1" max="99" required>
							
							<input type="submit" name="submit" value="Add to Cart" class="btn"></input> 
						</form>
						
						<p>The National Geographic Society publishes a monthly magazine called National Geographic in the United States. It is one of the most widely read publications of all time, known for its photojournalism.</p>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="relatedPage">
		
			<div class="productContainer">
			
				<h2 class = "title">Related Books</h2>
				
				<div class="booksRow">
				
					<?php include '../templates/productCard2.php';?>
					
					<?php include '../templates/productCard5.php';?>
					
					<?php include '../templates/productCard7.php';?>
					
				</div>
			</div>
		</div>
		

		<?php include '../templates/footer.php';?>
		
	<script src="../myjs.js" type="text/javascript"></script>
	
	</body>

</html>