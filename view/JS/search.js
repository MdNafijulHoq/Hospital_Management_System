function validate(pForm) {

	let isValid = "";
	let erruname = document.getElementById("erroruname");
	erruname.innerHTML = "";

	if (pForm.id.value === "") {
		erruname.innerHTML = "This can't be empty";
		isValid = "Not Valid";
	}
	
	if (isValid === "") {
		return true;
	}
	else {
		return false;
	}
}