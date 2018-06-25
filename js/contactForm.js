let radioButtons = document.getElementsByClassName("radio");
//let elevElements = document.getElementsByClassName("elevSelected");
let virksomhetElements = document.getElementsByClassName("virksomhetSelected");
let placeInput = document.getElementById("placeInput");
//let studentElements = document.getElementsByClassName("studentSelected");

function elevSelected() {
    for(element of virksomhetElements) {
        element.classList.add("w3-hide");
    }
    placeInput.setAttribute("placeholder", "Videregående skole")
}

function virksomhetSelected() {
    for(element of virksomhetElements) {
        element.classList.remove("w3-hide");
    }
    placeInput.setAttribute("placeholder", "Virksomhet")
}

function studentSelected() {
    for(element of virksomhetElements) {
        element.classList.add("w3-hide");
    }
    placeInput.setAttribute("placeholder", "Høyskole/universitet")
}
