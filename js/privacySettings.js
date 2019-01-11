let viewTrackSetting = document.getElementById("trackingSetting");
let responseText = document.getElementById("responseText");

if(localStorage.tracking != "false") {
    trackingSetting.checked = true;
}

function saveSettings() {
    if (trackingSetting.checked) {
        localStorage.tracking = "true";
    } else {
        localStorage.tracking = "false";
    }

    responseText.style.visibility = "visible";
}
