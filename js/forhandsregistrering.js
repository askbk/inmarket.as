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
} else if (clientType == "arbeidssoker") {
    arbeidsledigSelected();
} else if (clientType == "ansatt") {
    ansattSelected();
}

function check(n) {
    for(let i = 0; i < 5; ++i) {
        radioButtons[i].checked = false;
    }

    radioButtons[n].checked = true;
}

function elevSelected() {
    for(element of bedriftElements) {
        element.classList.add("w3-hide");
    }
    check(4);
    elevClient();
}

function ansattSelected() {
    for(element of bedriftElements) {
        element.classList.add("w3-hide");
    }
    check(1);
    elevClient();
}

function arbeidsledigSelected() {
    for(element of bedriftElements) {
        element.classList.add("w3-hide");
    }
    check(2);
    elevClient();
}
function studentSelected() {
    for(element of bedriftElements) {
        element.classList.add("w3-hide");
    }
    check(3);
    studentClient();
}

function bedriftSelected() {
    for(element of bedriftElements) {
        element.classList.remove("w3-hide");
    }
    check(0);
    bedriftClient();
}

$("#kontaktSkjema").submit(function (e) {
	e.preventDefault();
	$.post("forhandsregistreringemail.php", $(this).serialize(), function () {
		$("#kontaktSkjema").hide();
		$("#kontaktRespons").show();
	});
})
