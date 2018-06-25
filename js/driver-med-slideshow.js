let container = document.getElementById("driver-med-slideshow");
let slides = document.getElementsByClassName("driver-med-slides");
let i = 2, prev = 1, duration = 4000;

var slideInterval = setInterval(slideshow, duration);

function resetSlideshow() { // hides all slides
	for (let j = 0; j < 3; ++j) {
		slides[j].style.display = "none";
	}
}

function slideshow() { // hides previous slide and displays current slide
	prev = (i++) % 3;
	i %= 3;

    resetSlideshow();

	slides[i].style.display = "block";
}

function bubbleMouseOver(n) { // stops slideshow
    prev = (n + 1) % 3;
    i = (n + 2) % 3;
	clearInterval(slideInterval);
	resetSlideshow();
	slides[n - 1].style.display = "block";

}

container.onmouseover = function() {
	clearInterval(slideInterval);
}

container.onmouseleave = function() {
	slideInterval = setInterval(slideshow, duration);
}
