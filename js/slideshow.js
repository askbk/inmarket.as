let show1Container = document.getElementById("hjem");
let show2Container = document.getElementById("driver-med-slideshow");
// let show1Slides = document.getElementsByClassName("mySlides");
let show1Slides = [
	$(".bgimg-1"),
	$(".bgimg-2"),
	$(".bgimg-3"),
	$(".bgimg-4")
];

let show2Slides = document.getElementsByClassName("driver-med-slides");
let i1 = 0, i2 = 2, prev1 = 3, prev2 = 1, duration2 = 4000, duration1 = 6000;

let slide1Interval = setInterval(slideshow1, duration1)
let slide2Interval = setInterval(slideshow2, duration2);

function resetSlideshow(slides) { // hides all slides
	for (let j = 0; j < slides.length; ++j) {
		slides[j].style.display = "none";
	}
}

function slideshow2() { // hides previous slide and displays current slide
	prev2 = (i2++) % 3;
	i2 %= 3;

    resetSlideshow(show2Slides);

	show2Slides[i2].style.display = "block";
}

function slideshow1() {
	prev1 = (i1++) % 4;
	i1 %= 4;

	show1Slides[prev1].fadeOut();
	show1Slides[i1].fadeIn();

}

function bubbleMouseOver(n) { // stops slideshow
    prev2 = (n + 1) % 3;
    i2 = (n + 2) % 3;
	clearInterval(slide2Interval);
	resetSlideshow(show2Slides);
	show2Slides[n - 1].style.display = "block";

}

show2Container.onmouseover = function() {
	clearInterval(slide2Interval);
}

show2Container.onmouseleave = function() {
	slide2Interval = setInterval(slideshow2, duration2);
}

$(".slideshowText").on("mouseover", function () {
	clearInterval(slide1Interval);
});

$(".slideshowText").on("mouseleave", function () {
	slide1Interval = setInterval(slideshow1, duration1);
});
