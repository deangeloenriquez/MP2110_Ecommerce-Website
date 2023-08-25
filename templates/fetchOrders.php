<?php

	
	if(empty($_POST['submit'])){
		
		
	}else{
		
		if ($error == false) {
			
			if(!empty($_POST['bookArray'])){
				
				foreach($_POST['bookArray'] as $check){
					
					$order = mysqli_real_escape_string($conn, $check);
					$sql =  "SELECT * FROM orders WHERE OrderID = '$order'";  
					
					$orderData = mysqli_query($conn, $sql);
					$bookOrder = mysqli_fetch_assoc($orderData);
					
					if($bookOrder){
						$item = mysqli_real_escape_string($conn,$bookOrder['Item']);
						$qty = mysqli_real_escape_string($conn, $bookOrder['Qty']);
						$unitPrice = mysqli_real_escape_string($conn, $bookOrder['UnitPrice']);
						$totalPrice = mysqli_real_escape_string($conn, $bookOrder['TotalPrice']);
						$orderDate = mysqli_real_escape_string($conn, $bookOrder['OrderDate']);
					}
					
					$name = mysqli_real_escape_string($conn, $_POST['name']); 
					$number = mysqli_real_escape_string($conn, $_POST['number']); 
					$email = mysqli_real_escape_string($conn, $_POST['email']); 
					$address = mysqli_real_escape_string($conn, $_POST['address']); 
					
					$checkout = "INSERT INTO books(UserName,DeliveryAddr,Email,ContactNum,DateOfOrder,Item,Qty,UnitPrice,TotalPrice) VALUES ('$name','$address','$email','$number','$orderDate','$item','$qty','$unitPrice','$totalPrice')";
				
					if(mysqli_query($conn, $checkout)){
					}else{
						echo 'query error: ' . mysqli_error($conn);
					}
					
				}

			header("Location: ../pages/page11.php");
				
			}	
		}

	}
?>