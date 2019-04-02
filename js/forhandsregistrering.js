let radioButtons = document.getElementsByClassName("klient-radio");
let bedriftElements = document.getElementsByClassName("bedriftSelected");
let inputPlace = document.getElementById("inputPlace");
let clientType = getClientType();
let nextPageButton = document.getElementById("nextPageButton");

nextPageButton.addEventListener("click", nextPage);

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
	for (let radioBtn of radioButtons) {
		radioBtn.checked = false;
	}
    // radioButtons[n].checked = true;
}

function elevSelected() {
    for(element of bedriftElements) {
        element.classList.add("w3-hide");
    }
    // check(0);
    elevClient();
}

function ansattSelected() {
    for(element of bedriftElements) {
        element.classList.add("w3-hide");
    }
    // check(3);
    ansattClient();
}

function arbeidsledigSelected() {
    for(element of bedriftElements) {
        element.classList.add("w3-hide");
    }
    // check(2);
    arbeidssokerClient();
}
function studentSelected() {
    for(element of bedriftElements) {
        element.classList.add("w3-hide");
    }
    // check(1);
    studentClient();
}

function bedriftSelected() {
    for(element of bedriftElements) {
        element.classList.remove("w3-hide");
    }

    // check(4);
    // bedriftkode.style.display="inherit";
    bedriftClient();
}

function nextPage(e){
	e.preventDefault();
    if(!document.getElementById("kontaktSkjema").checkValidity()){
        return false;
    }
    //elevSelected();
    //document.getElementById("radio-elev").required=true;
    document.getElementById("first-page").style.display = "none";
    document.getElementById("second-page").style.display = "block";
    document.getElementById("personvern").required = true;

    return false;
}


function nextPageBedrift(){
    if(!document.getElementById("kontaktSkjemaBedrift").checkValidity()){
        return false;
    }
    document.getElementById("first-page").style.display = "none";
    document.getElementById("second-page").style.display = "block";
    document.getElementById("personvern").required = true;
    // document.getElementById("inputBedriftNavn").required = true;
    // document.getElementById("inputBedriftNummer").required = true;

    return false;
}

$("#kontaktSkjema").submit(function (e) {
	e.preventDefault();
	let url;

	if (document.getElementById("inputBedriftNavn")) {
		url = "forhandsregistreringbedriftemail.php";
	} else {
		url = "forhandsregistreringemail.php";
	}

	$.post(url, $(this).serialize(), function () {
		$(".submit-hide").hide();
		$("#kontaktRespons").show();
	});
});
