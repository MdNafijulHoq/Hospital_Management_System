function validate(pForm) {
	let isValid = "";
	let errfname = document.getElementById("errorfname");
	let errlname = document.getElementById("errorlname");
	let errgen = document.getElementById("errorgender");
	let erradd = document.getElementById("erroraddress");
	let erreamil = document.getElementById("erroremail");
	let errph = document.getElementById("errorphone");
	let erruname = document.getElementById("erroruname");
	let errpass = document.getElementById("errorpass");
	let errrole = document.getElementById("errorrole");


	if (pForm.fname.value === "") {
		errfname.innerHTML = "Please fill up the Firstname.";
		isValid = "Not Valid";
	}
	if (pForm.lname.value === "") {
		errlname.innerHTML = "Please fill up the Lastname";
		isValid = "Not Valid";
	}
	if (pForm.gender.value === "") {
		errgen.innerHTML = "Please fill up the Gender";
		isValid = "Not Valid";
	}
	if (pForm.address.value === "") {
		erradd.innerHTML = "Please fill up the Address";
		isValid = "Not Valid";
	}
	if (pForm.email.value === "") {
		erreamil.innerHTML = "Please fill up the Email";
		isValid = "Not Valid";
	}
	if (pForm.phone.value === "") {
		errph.innerHTML = "Please fill up the Phone No";
		isValid = "Not Valid";
	}
	if (pForm.uname.value === "") {
		erruname.innerHTML = "Please fill up the Username";
		isValid = "Not Valid";
	}
	if (pForm.pass.value === "") {
		errpass.innerHTML = "Please fill up the Password";
		isValid = "Not Valid";
	}
	if (pForm.role.value === "") {
		errrole.innerHTML = "Please fill up Role";
		isValid = "Not Valid";
	}

	if (isValid === "") {
		return true;
	}
	else {
		return false;
	}
}