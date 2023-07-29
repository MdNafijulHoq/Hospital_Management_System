function validate(pForm){
	let isValid = "";

	if(pForm.username.value === ""){
		document.getElementById("erruname").innerHTML = "Username can't be empty";
		isValid = "Not Valid";
	}
	if(pForm.password.value === ""){
		document.getElementById("errpass").innerHTML = "Password can't be empty";
		isValid = "Not Valid";
	}

	if(isValid ===""){
		return true;
	}
	else{
		return false;
	}
}