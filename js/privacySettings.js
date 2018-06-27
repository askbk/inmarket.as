let viewTrackSetting = document.getElementById("viewTrackSetting");
let clickTrackSetting = document.getElementById("clickTrackSetting");
let domTrackSetting = document.getElementById("domTrackSetting");

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
        setCookie("trackPageView", "true", 3650);
    } else {
        setCookie("trackPageView", "false", 3650);
    }

    if (clickTrackSetting.checked) {
        setCookie("trackClicks", "true", 3650);
    } else {
        setCookie("trackClicks", "false", 3650);
    }

    if (domTrackSetting.checked) {
        setCookie("trackDomStream", "true", 3650);
    } else {
        setCookie("trackDomStream", "false", 3650);
    }
}
