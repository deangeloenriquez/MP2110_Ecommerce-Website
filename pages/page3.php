<?php

	include('../templates/connect.php');
	
	$sql = 'SELECT * FROM orders';
	$result = mysqli_query($conn, $sql);
	
	include('../templates/formValidation.php');
	include('../templates/fetchOrders.php');
	
	mysqli_close($conn);
?>

<!DOCTYPE html>

<html lang = "en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>My Orders</title>
		
		<link rel="stylesheet" href="../mycss.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>

	<body>
	
		<?php include '../templates/myOrdersNavigationBar.php';?>
		
		<div class = "cartPage">
		
			<div class = "productContainer ordersPage">
			
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
			
			<!-- order table -->
			<table>    
			
				<tr>
					<th>Order ID</th>
					<th>Item</th>
					<th>Quantity</th>
					<th>To Include?</th>
					<th>Date and Time of Order</th>
					<th>Unit Price</th>
					<th>Total</th>
				</tr>
			
				<?php while($bookOrder = mysqli_fetch_array($result)){ ?>
					<tr>
					
						<td><?php echo $bookOrder['OrderID'] ?></td>
						
						<td>
							<div>
								<p><?php echo $bookOrder['Item'] ?></p>
								
								
								<a href="../templates/delete.php?OrderID=<?php echo $bookOrder['OrderID']; ?>">Remove</a>
								
							</div>
						</td>
						
						<td><?php echo $bookOrder['Qty'] ?></td>
						
						<td>
							<input type = "checkbox" name = "bookArray[]" value = "<?php echo $bookOrder['OrderID']; ?>">
						</td>
						
						<td><?php echo $bookOrder['OrderDate'] ?></td>
						
						<td>₱<?php echo $bookOrder['UnitPrice'] ?>.00</td>
						
						<td>₱<?php echo $bookOrder['TotalPrice'] ?>.00</td>
						
					</tr>
				<?php } ?>
			</table>
			
			<!-- order form -->
			<div class = "orderForm">
			
				<h2 class = "title">Check Out</h2>

				<div class="inputCheckout">
					<input type="text" name="name" placeholder="Name" required>
				</div>
				
				<div class = "orderRow">
				
					<div class="inputCheckout">
						<input type="text" name="number" placeholder="Contact Number"required>
					</div>
					
					<div class="inputCheckout">
						<input type="email" name="email" placeholder="Email" required>
					</div>
					
				</div>
				
				<div class="inputCheckout">
					<input  type = "text" name="address" placeholder="Delivery Addresss" required>
				</div>
					
				<input type="submit" name="submit" value="Check Out" class="button"></input> 
					
			</div>
				
			</form>
			</div>

		</div>
		
		<?php include '../templates/footer.php';?>
		
	<script src="../myjs.js" type="text/javascript"></script>
	</body>

</html>