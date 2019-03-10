let radioButtons = document.getElementsByClassName("klient-radio");
//let elevElements = document.getElementsByClassName("elevSelected");
let bedriftElements = document.getElementsByClassName("bedriftSelected");
let inputPlace = document.getElementById("inputPlace");
//let studentElements = document.getElementsByClassName("studentSelected");

let clientType = getClientType();

if (clientType == "bedrift") {
    bedriftSelected();
} else if (clientType == "student") {
    studentSelected();
} else if (clientType == "elev") {
    elevSelected();
}

function check(n) {
    for(let i = 0; i < 3; ++i) {
        radioButtons[i].checked = false;
    }

    radioButtons[n].checked = true;
}

function elevSelected() {
    for(element of bedriftElements) {
        element.classList.add("w3-hide");
    }
    inputPlace.setAttribute("placeholder", "High school")
    check(0);
    elevClient();
}

function studentSelected() {
    for(element of bedriftElements) {
        element.classList.add("w3-hide");
    }
    inputPlace.setAttribute("placeholder", "College/University")
    check(1);
    studentClient();
}

function bedriftSelected() {
    for(element of bedriftElements) {
        element.classList.remove("w3-hide");
    }
    inputPlace.setAttribute("placeholder", "Company")
    check(2);
    bedriftClient();
}

$("#kontaktSkjema").submit(function (e) {
	e.preventDefault();
	$.post("contact.php", $(this).serialize(), function () {
		$("#kontaktSkjema").hide();
		$("#kontaktRespons").show();
	});
})
