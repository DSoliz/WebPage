function check(){
	document.getElementById("cartArr").value = inCart;
	if(document.getElementById("myuser").value == ""){
		alert("No username");
		event.preventDefault();
		return false;
	}else{
		if(document.getElementById("mypass").value == ""){
			alert("No password");
			event.preventDefault();
			return false;
		}
	}
	if(inCart.length == 0){
		alert("Your Cart is Empty!");
		event.preventDefault();
		return false;
	}else{
		return true;
	}
}
