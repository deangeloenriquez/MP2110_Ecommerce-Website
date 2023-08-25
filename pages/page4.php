<!DOCTYPE html>

<?php

	include('../templates/connect.php');
	
	if(empty($_POST['addCart'])){
		
	}else{

		$itemName = "Explore the World: Knowing God Exists by Observing Creation";
		$qtyInput = mysqli_real_escape_string($conn, $_POST['addCart']);
		$itemPrice = '100';
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
		
		<title>Explore the World</title>
		
		<link rel="stylesheet" href="../mycss.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>

	<body>
	
		
		<?php include '../templates/productsNavigationBar.php';?>
		
		<div class="product">
		
			<div class="productPage singleProduct">
			
				<div class="booksRow">
				
					<div class="bookContainer">
						<img src="images/book4.jpg" width="100%">
					</div>
					
					<div class="bookContainer">
						
						<p>Bruce Malone and Julie Von Vett</p>
					
						<h1>Explore the World: Knowing God Exists by Observing Creation</h1>
						
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half"></i>
						</div>
						
						<h4>₱100.00</h4> 
						
						<form action="page4.php" method="POST" name = "form" onsubmit="return addedToCart()">
							<input type = "number" name="addCart" value="1"min="1" max="99" required>
							
							<input type="submit" name="submit" value="Add to Cart" class="btn"></input> 
						</form>
						
						<h3>Book Description</h3>
						
						<p>In this book, you'll find 365 different examples of how science supports a biblical explanation of our origins. Biology, geology, genetics, botany, anatomy, history, and cosmology are just a few of the topics covered. It's written in a way that's easy to read to even young children, but it's also a lot of fun for adults to read. The book also has a lot of references, as well as indexes for topics, Bible verses, and other topics. It's a fantastic resource for students, parents, and anybody interested in learning more about creation or nature.</p>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<div class="relatedPage">
		
			<div class="productContainer">
			
				<h2 class = "title">Related Books</h2>
				
				<div class="booksRow">
				
					<?php include '../templates/productCard4.php';?>
					
					<?php include '../templates/productCard7.php';?>
					
					<?php include '../templates/productCard5.php';?>
					
				</div>
			</div>
		</div>
		

			
		
		<?php include '../templates/footer.php';?>
		
	<script src="../myjs.js" type="text/javascript"></script>
	</body>

</html>