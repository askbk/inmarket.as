// Change style of navbar on scroll
/*window.onscroll = function() {
	myFunction()
};

function myFunction() {
	var navbar = document.getElementById("navbar");
	if (document.body.scrollTop > window.innerHeight || document.documentElement.scrollTop > window.innerHeight) {
		navbar.className = "w3-bar w3-card-2 w3-animate-top w3-white navbar-accent w3-theme-text-red w3-border-bottom";
	} else {
		navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white navbar-accent w3-theme-text-red w3-border-bottom", "");
	}
}*/

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
	var x = document.getElementById("smallnav");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
	} else {
		x.className = x.className.replace(" w3-show", "");
	}
}
