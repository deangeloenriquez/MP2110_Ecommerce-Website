function addedToCart(){
	
	var n = document.form.addCart.value;
	
	if(isNaN(n)){
		alert("Invalid input: Please enter a number.");
		return false;
	} else{
		
		alert("Product added successfully.");
		return true;
	}
		
	
}
