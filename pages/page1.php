<!DOCTYPE html>

<html lang = "en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Products</title>
		
		<link rel="stylesheet" href="../mycss.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>

	<body>
	
		<?php include '../templates/productsNavigationBar.php';?>
		

		<div class="books">
		
			<div class="productContainer">
			
				<h2 class = "title">All Books</h2>
				
				<div class="booksRow">
				
					<?php include '../templates/productCard1.php';?>
					
					<?php include '../templates/productCard2.php';?>
					
					<?php include '../templates/productCard3.php';?>
					
					<?php include '../templates/productCard4.php';?>
					
					<?php include '../templates/productCard5.php';?>
					
					<?php include '../templates/productCard6.php';?>
					
					<?php include '../templates/productCard7.php';?>
					
					<?php include '../templates/productCard8.php';?>
					
				</div>
				
			</div>
			
		</div>
	
		<?php include '../templates/footer.php';?>
		
	<script src="../myjs.js" type="text/javascript"></script>
	
	</body>

</html>