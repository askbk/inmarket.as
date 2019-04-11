$("#kontaktSkjema").submit(function (e) {
    e.preventDefault();
    $.post("contact.php", $(this).serialize(), function () {
        $("#kontaktSkjema").hide();
        $("#kontaktRespons").show();
    });
});


/*Ble en sikkelig dirty måte å gjøre det på for å forhindre buggen :))))*/
function button() {
    let skjema = document.getElementById("kontaktSkjemaVirksomhet");
    document.getElementById("checkValidity").click();

    if(skjema[0].checkValidity() && skjema[1].checkValidity() && skjema[2].checkValidity() && skjema[3].checkValidity() ){
        $.post("contactVirksomheter.php", $(skjema).serialize(), function () {
            $("#kontaktSkjemaVirksomhet").hide();
            $("#kontaktRespons").show();
        });
    }
}