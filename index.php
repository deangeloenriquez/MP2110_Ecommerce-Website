
<!DOCTYPE html>

<html lang = "en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Home</title>
		
		<link rel="stylesheet" href="mycss.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>

	<body>
	
	<?php include 'templates/homeNavigationBar.php';?>
		
		<div class = "cover">
		
			<div class = "maxWidth">
				<div>
					<div class="text1">Welcome to</div>
					<div class="text2">Angelo's Library</div>
					<div class="text3">of <span>Pre-Loved Books</span> </div>
					
				</div>
			
			</div>
		</div>
	
	
	<!-- gallery section -->
		<div class= "gallery">
		
			<div class= "maxWidthgallery">
				<h2 class = "title">Featured Collection</h2>
			
				<div class= "galleryContent">
				
					<div class = "card">
					<a href = "pages/page2.php">
						<div class="card-image"><img src = "img/img1.jpg" ></div>
						<div class="card-info">
						<h3>Diary of a Wimpy Kid: Rodrick Rules</h3>
						<p>₱200.00</p>
						</div>
					</a>
					
					</div>

					<div class = "card">
					<a href = "pages/page7.php">
						<div class="card-image"><img src = "img/img5.jpg"></div>
						<div class="card-info">
						<h3>Bumper Book of Sudoku</h3>
						<p>₱200.00</p>
						</div>
					</a>
					</div>
					
					<div class = "card">
					<a href = "pages/page10.php">		
						<div class="card-image"><img src = "img/img3.jpg"></div>
						<div class="card-info">
						<h3>Magicians of Quality</h3>
						<p>₱90.00</p>
						</div>
					</a>
					</div>
					
					<div class = "card">
					<a href = "pages/page8.php">		
						<div class="card-image"><img src = "img/img7.jpg"></div>
						<div class="card-info">
						<h3>The Walled Orchard</h3>
						<p>₱200.00</p>
						</div>
					</a>
					</div>
					
				</div>
			</div>
			
		</div>
			
			
		
	<?php include 'templates/footer.php';?>
		
	<script src="myjs.js" type="text/javascript"></script>
	</body>

</html>