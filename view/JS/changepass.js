function validate(pForm){

	console.log("Test");

	let isvalidate = "";

	let erruname = document.getElementById('errusername');
	let erropass = document.getElementById('erroldpass');
	let errnpass = document.getElementById('errnewpass');

	erruname.innerHTML = "";
	erropass.innerHTML = "";
	errnpass.innerHTML = "";



	if(pForm.username.value === ""){
		erruname.innerHTML = "Provide Username";
		isvalidate = "Not valid";
	}
	if(pForm.oldpass.value === ""){
		erropass.innerHTML = "Provide Old password";
		isvalidate = "Not valid";
	}
	if(pForm.newpass.value === ""){
		errnpass.innerHTML = "Provide New password";
		isvalidate = "Not valid";
	}

	if(isvalidate === ""){
		return true;
	}
	else{
		return false;
	}

}