<?php
	$conn = mysqli_connect('localhost', 'deangelo', 'Enriquez10!', 'orders_enriquez');

	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}
?>