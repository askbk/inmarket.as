var submitButton;

window.onload = function(){
    submitButton = document.getElementById("submitForm");
}

// Submit form using AJAX
function submitForm (){var name = encodeURIComponent(document.getElementById("inputName").value);
    var email = encodeURIComponent(document.getElementById("inputEmail").value);
    var phone = encodeURIComponent(document.getElementById("inputPhone").value);
    var text = encodeURIComponent(document.getElementById("inputText").value);
    var data = "name=" + name + "&email=" + email + "&phone=" + phone + "&text=" + text;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText != "Meldingen ble sendt!"){
                document.getElementById("responseText").innerHTML = this.responseText;
            } else {
                //document.getElementById("kontaktHeader").className += " w3-hide ";
                document.getElementById("kontaktSkjema").className += " w3-hide ";
                document.getElementById("kontaktRespons").className += " w3-show";
            }
        }
    }
    xhttp.open("POST", "contact.php", true);
    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
    xhttp.send(data);
}
