// Submit form using AJAX
function submitForm() {
	var name = encodeURIComponent(document.getElementById("inputName").value);
	var email = encodeURIComponent(document.getElementById("inputEmail").value);
	var phone = encodeURIComponent(document.getElementById("inputPhone").value);
	var data = "name=" + name + "&email=" + email + "&phone=" + phone;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if (this.responseText != "Takk for henvendelsen!") {
				document.getElementById("responseText").innerHTML = this.responseText;
			} else {
				document.getElementById("kontaktSkjema").className += " w3-hide ";
				document.getElementById("kontaktRespons").className += " w3-show";
			}
		}
	}
	xhttp.open("POST", "contact.php", true);
	xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
	xhttp.send(data);
}

function submitPhone() {
	var phone = encodeURIComponent(document.getElementById("inputPhoneBar").value);
	var data = "phone=" + phone;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if (this.responseText != "Takk for henvendelsen!") {
				//document.getElementById("responseText").innerHTML = this.responseText;
			} else {
				console.log("success");
				document.getElementById("navbar-contact").className += " w3-hide ";
				document.getElementById("navbar-submit").className += " w3-show";
			}
			console.log("success");
			document.getElementById("navbar-contact").className += " w3-hide ";
			document.getElementById("navbar-submit").className += " w3-show";
		}
	}
	xhttp.open("POST", "contactPhone.php", true);
	xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
	xhttp.send(data);
}
