let privacyNotice = document.getElementById("privacyNotice");

function acceptTracking() {
    localStorage.tracking = "true";
    privacyNotice.classList.add("w3-hide");
}

window.onload = function() {
    if(localStorage.tracking == "true") {
        privacyNotice.classList.remove("w3-hide")
    }
}
