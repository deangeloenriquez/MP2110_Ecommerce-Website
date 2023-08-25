<?php
	
	$error = false;
	
	if(isset($_POST['submit'])){
		
		if(!empty($_POST['name'])){
		
			if (!preg_match('/^[a-zA-z\s]+$/', $_POST['name'])){
				echo '<script type="text/javascript"> 
					alert("Invalid Input: Name must only be in letters and spaces.");
					</script>';
				$error = true;
			}
		}
		
		if(!empty($_POST['number'])){
		
			if (!preg_match('/^[0-9]+$/', $_POST['number'])){
				echo '<script type="text/javascript"> 
					alert("Invalid Input: Contact Number must only be in numbers.");
					</script>';
				$error = true;
			}
		}
		
		if(empty($_POST['bookArray'])){
			
				echo '<script type="text/javascript"> 
					alert("Invalid Input: Please select an order.");
					</script>';
				$error = true;			
		}
		
	}
	
?>
