let slides = [
	$(".bgimg-1"),
	$(".bgimg-2"),
	$(".bgimg-3")
],
	slideshowBoxes = [
		$("#elever-studenter"),
		$("#jobb"),
		$("#virksomhet")
],
	infoContainer = $("#info-container");

let slideIndicators = $(".slide-indicator");
let i = 0, prev = 2, duration = 6000;
let slideInterval = setInterval(slideshow, duration);

function resetSlideshow(slides) { // hides all slides
	for (let j = 0; j < slides.length; ++j) {
		slides[j].style.display = "none";
	}
}

function slideshow() {
	prev = (i++) % 3;
	i %= 3;

	slides[prev].fadeOut();
	slides[i].fadeIn();

	slideIndicators.slice(prev, prev+1).css("color","white")
	slideIndicators.slice(i, i+1).css("color","black");
}

$(".slide-indicator").on("click", function (ev) {
	let index = Number(ev.currentTarget.attributes.n.value);
	infoContainer.show();
	slideshowBoxes[index].slideDown();
	slideshowBoxes[(index+1) % 3].slideUp();
	slideshowBoxes[(index+2) % 3].slideUp();

	if (index === i) {
		return false;
	}
	clearInterval(slideInterval);
	slides[i].fadeOut();
	slides[index].fadeIn();
	slideIndicators.slice(i, i+1).css("color","white");

	i = index;
	prev = (i - 1) % 3;

	slideIndicators.slice(i, i+1).css("color","black");

	// slideInterval = setInterval(slideshow, duration)
});

$(".mySlides").on("click", function () {
	infoContainer.slideUp();
	for (var k = 0; k < slideshowBoxes.length; k++) {
		slideshowBoxes[k].slideUp();
	}
})
