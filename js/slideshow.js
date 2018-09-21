let slides = [
	$(".bgimg-1"),
	$(".bgimg-2"),
	$(".bgimg-3"),
	$(".bgimg-4")
];
let slideIndicators = $(".slide-indicator");
let i = 0, prev = 3, duration = 6000;
let slideInterval = setInterval(slideshow, duration)

function resetSlideshow(slides) { // hides all slides
	for (let j = 0; j < slides.length; ++j) {
		slides[j].style.display = "none";
	}
}

function slideshow() {
	prev = (i++) % 4;
	i %= 4;

	slides[prev].fadeOut();
	slides[i].fadeIn();

	slideIndicators.slice(prev, prev+1).removeClass("golden-text");
	slideIndicators.slice(i, i+1).addClass("golden-text");
}

$(".slide-indicator").on("click", function (ev) {
	let index = Number(ev.currentTarget.attributes.n.value);

	clearInterval(slideInterval);
	slides[i].fadeOut();
	slides[index].fadeIn();
	slideIndicators.slice(i, i+1).removeClass("red-text");

	i = index;
	prev = (i - 1) % 4;

	slideIndicators.slice(i, i+1).addClass("red-text");

	slide1Interval = setInterval(slideshow, duration)
})
