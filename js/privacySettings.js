let viewTrackSetting = document.getElementById("viewTrackSetting");
let clickTrackSetting = document.getElementById("clickTrackSetting");
let domTrackSetting = document.getElementById("domTrackSetting");
let responseText = document.getElementById("responseText");

if(getCookieValue("trackPageView") != "false") {
    viewTrackSetting.checked = true;
}

if (getCookieValue("trackClicks") != "false") {
    clickTrackSetting.checked = true;
}

if (getCookieValue("trackDomStream") != "false") {
    domTrackSetting.checked = true;
}

function saveSettings() {
    if (viewTrackSetting.checked) {
        setCookie("trackPageView", "true", 365);
    } else {
        setCookie("trackPageView", "false", 365);
    }

    if (clickTrackSetting.checked) {
        setCookie("trackClicks", "true", 365);
    } else {
        setCookie("trackClicks", "false", 365);
    }

    if (domTrackSetting.checked) {
        setCookie("trackDomStream", "true", 365);
    } else {
        setCookie("trackDomStream", "false", 365);
    }

    setCookie("piwik_ignore", "true", 365);

    responseText.style.visibility = "visible";
}
