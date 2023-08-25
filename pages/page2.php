<!DOCTYPE html>

<?php

	include('../templates/connect.php');
	
	
	if(empty($_POST['addCart'])){
		
		
	}else{

			$itemName = "Diary of a Wimpy Kid: Rodrick Rules";
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
		
		<title>Diary of a Wimpy Kid</title>
		
		<link rel="stylesheet" href="../mycss.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>

	<body>
		

		<?php include '../templates/productsNavigationBar.php';?>
		
		<div class="product">
		
			<div class="productPage singleProduct">
			
				<div class="booksRow">
				
					<div class="bookContainer">
						<img src="images/book1.jpg" width="100%">
					</div>
					
					<div class="bookContainer">
						
						<p>Jeff Kinney</p>
					
						<h1>Diary of a Wimpy Kid: Rodrick Rules</h1>
						
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						
						<h4>₱200.00</h4> 
						
						<form action="page2.php" method="POST" name = "form" onsubmit="return addedToCart()">
							<input type = "number" name="addCart" value="1"min="1" max="99" required>
							
							<input type="submit" name="submit" value="Add to Cart" class="btn"></input> 
						</form>
						
						<h3>Book Description</h3>
						
						<p>Greg is eager to put the last three months behind him as the new school year begins. Unfortunately for Greg, his older brother, Rodrick, is well aware of the occurrence that he is trying to keep hidden. Well, secrets have a way of being exposed, especially if you're dealing with a diary. In the Diary of the Wimpy Kid: Rodrick Rules, Greg's struggles to navigate the dangers of middle school, to amaze the girls, to avoid the school talent show, and most importantly, to keep his secret hidden.</p>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="relatedPage">
		
			<div class="productContainer">
			
				<h2 class = "title">Related Books</h2>
				
				<div class="booksRow">
				
					<?php include '../templates/productCard3.php';?>
					
					<?php include '../templates/productCard6.php';?>
					
					<?php include '../templates/productCard8.php';?>
					
				</div>
			</div>
		</div>
		
		<?php include '../templates/footer.php';?>
		
	<script src="../myjs.js" type="text/javascript"></script>
	</body>

</html>