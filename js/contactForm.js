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
    if (!skjema.checkValidity()) {
        document.getElementById("checkValidity").click();
        return false;
    }

    $.post("contactVirksomheter.php", $(skjema).serialize(), function () {
        $("#kontaktSkjemaVirksomhet").hide();
        $("#kontaktRespons").show();
    });

}
