<?php

	include('connect.php');
	
	$id = $_REQUEST['OrderID'];

	$sql = "DELETE FROM orders WHERE OrderID = $id";
	
	$result = mysqli_query($conn,$sql) or die ( mysqli_error());
	
	header("Location: ../pages/page3.php");

?>
