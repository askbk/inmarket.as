let radioButtons = document.getElementsByClassName("klient-radio");
//let elevElements = document.getElementsByClassName("elevSelected");
let virksomhetElements = document.getElementsByClassName("virksomhetSelected");
let inputPlace = document.getElementById("inputPlace");
//let studentElements = document.getElementsByClassName("studentSelected");

function check(n) {
    for(let i = 0; i < 3; ++i) {
        radioButtons[i].checked = false;
    }

    radioButtons[n].checked = true;
}

function elevSelected() {
    for(element of virksomhetElements) {
        element.classList.add("w3-hide");
    }
    inputPlace.setAttribute("placeholder", "Videregående skole")
    check(0);
}

function studentSelected() {
    for(element of virksomhetElements) {
        element.classList.add("w3-hide");
    }
    inputPlace.setAttribute("placeholder", "Høyskole/universitet")
    check(1);
}

function virksomhetSelected() {
    for(element of virksomhetElements) {
        element.classList.remove("w3-hide");
    }
    inputPlace.setAttribute("placeholder", "Virksomhet")
    check(2);
}
