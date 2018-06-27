let privacyNotice = document.getElementById("privacyNotice");

function acceptTracking() {
    setCookie("trackPageView", "true", 3650);
    setCookie("trackClicks", "true", 3650);
    setCookie("trackDomStream", "true", 3650);
    privacyNotice.classList.add("w3-hide");
}

window.onload = function() {
    if(getCookieValue("trackPageView") == "") {
        privacyNotice.classList.remove("w3-hide")
    }
}
