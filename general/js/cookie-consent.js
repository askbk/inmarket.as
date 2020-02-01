// Cookie Compliancy BEGIN
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

$(document).ready(function() {
  const cookieName = "cookieCompliancyAccepted";
  
  if (getCookie(cookieName) === "") {
    $("#myCookieConsent").show(400);
  }

  $("#cookieButton").click(function() {
    console.log("Understood");
    setCookie("cookieCompliancyAccepted", "here", 90);
    $("#myCookieConsent").hide(400);
  });
});
// Cookie Compliancy END
