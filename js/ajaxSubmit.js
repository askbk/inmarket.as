// Submit form using AJAX

$("#phoneSubmit").click(function (e) {
	e.preventDefault();
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
				document.getElementById("phone-input").classList.add("w3-hide");
				document.getElementById("navbar-submit").classList.remove("w3-hide");
			}
			console.log("success");
			document.getElementById("phone-input").classList.add("w3-hide");
			document.getElementById("navbar-submit").classList.remove("w3-hide");
		}
	}
	xhttp.open("POST", "contactPhone.php", true);
	xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
	xhttp.send(data);
});
