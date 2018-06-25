// Submit form using AJAX
let contactForm = document.getElementById("kontaktSkjema");

contactForm.onsubmit = function (event) {
	event.preventDefault();
}

function submitForm() {
	let client = encodeURIComponent(document.querySelector('input[name="klient"]:checked').value);
	let name = encodeURIComponent(document.getElementById("inputName").value);
	let place = encodeURIComponent(document.getElementById("inputPlace").value);
	let phone = encodeURIComponent(document.getElementById("inputPhone").value);
	let data = "client=" + client + "&name=" + name + "&place=" + place + "&phone=" + phone;
	let xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if (this.responseText != "Takk for henvendelsen!") {
				document.getElementById("responseText").innerHTML = this.responseText;
			} else {
				document.getElementById("kontaktSkjema").classList.add("w3-hide");
				document.getElementById("kontaktRespons").classList.remove("w3-hide");
			}
		}
	}
	xhttp.open("POST", "contact.php", true);
	xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
	xhttp.send(data);
}

function submitPhone() {
	let phone = encodeURIComponent(document.getElementById("inputPhoneBar").value);

	if(phone.indexOf(' ') >= 0 || phone == '') {
		return;
	}

	let data = "phone=" + phone;
	let xhttp = new XMLHttpRequest();
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
