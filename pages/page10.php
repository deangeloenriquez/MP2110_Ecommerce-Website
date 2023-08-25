<!DOCTYPE html>

<?php

	include('../templates/connect.php');
	
	if(empty($_POST['addCart'])){
		
	}else{

		$itemName = "Magicians of Quality";
		$qtyInput = mysqli_real_escape_string($conn, $_POST['addCart']);
		$itemPrice = '90';
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
		
		<title>Magicians of Quality</title>
		
		<link rel="stylesheet" href="../mycss.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>

	<body>
	
		
		<?php include '../templates/productsNavigationBar.php';?>
		
		<div class="product">
		
			<div class="productPage singleProduct">
			
				<div class="booksRow">
				
					<div class="bookContainer">
						<img src="images/book10.jpg" width="100%">
					</div>
					
					<div class="bookContainer">
						
						<p>Patricia C. Wrede, Caroline Stevermer</p>
					
						<h1>Magicians of Quality</h1>
						
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half"></i>
						</div>
						
						<h4>₱90.00</h4> 
						
						<form action="page10.php" method="POST" name = "form" onsubmit="return addedToCart()">
							<input type = "number" name="addCart" value="1"min="1" max="99" required>
							
							<input type="submit" name="submit" value="Add to Cart" class="btn"></input> 
						</form>
						
						<h3>Book Description</h3>
						
						<p>Something strange is afoot for country-bred cousins Cecelia Rushton and Katherine Talgarth, aside from the incessant swirl of Regency balls - something Young Ladies of Quality rarely come into contact with: magic. Not only just rural folk's love charms, but also true sorcery capable of obstructing desires and destroying lives.</p>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="relatedPage">
		
			<div class="productContainer">
			
				<h2 class = "title">Related Books</h2>
				
				<div class="booksRow">
				
					<?php include '../templates/productCard1.php';?>
					
					<?php include '../templates/productCard3.php';?>
					
					<?php include '../templates/productCard6.php';?>
					
				</div>
			</div>
		</div>
		

		<?php include '../templates/footer.php';?>
		
	<script src="../myjs.js" type="text/javascript"></script>
	
	</body>

</html>