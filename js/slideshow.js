let slides = [
	$(".bgimg-allinclusive-1"),
	$(".bgimg-christian-kamera"),
	$(".bgimg-jenterpeker")
],
	slideshowBoxes = [
		$("#bedrift"),
		$("#elever-studenter"),
		$("#jobb")
],
	infoContainer = $("#info-container");

let slideIndicators = $(".slide-indicator");
let i = 0, prev = 2, duration = 6000;
let slideInterval = setInterval(slideshow, duration);
let prevButton = -1;

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
	slideIndicators.slice(prev, prev+1).toggleClass("indicator-active shadow-inset");
	slideIndicators.slice(i, i+1).toggleClass("indicator-active shadow-inset");
}

$(".slide-indicator").on("click", function (ev) {
	let index = Number(ev.currentTarget.attributes.n.value);
	if (prevButton === index) {
		hideInfoBoxes();
		prevButton = -1;
		return true;
	}
	infoContainer.show();
	slideshowBoxes[index].slideDown();
	slideshowBoxes[(index+1) % 3].slideUp();
	slideshowBoxes[(index+2) % 3].slideUp();

	if (index !== i) {
		clearInterval(slideInterval);
		slides[i].fadeOut();
		slides[index].fadeIn();
		slideIndicators.slice(i, i+1).toggleClass("indicator-active shadow-inset");

		i = index;
		prev = (i - 1) % 3;

		slideIndicators.slice(i, i+1).toggleClass("indicator-active shadow-inset");
	}

	prevButton = index;
});

$(".mySlides").on("click", function () {
	prevButton = -1;
	hideInfoBoxes();
});

function hideInfoBoxes() {
	infoContainer.slideUp();

	for (let k = 0; k < slideshowBoxes.length; k++) {
		slideshowBoxes[k].hide();
	}

	clearInterval(slideInterval);
	slideInterval = setInterval(slideshow, duration)
}

$(document).ready(function(){
  $("#partner-slideshow").slick({
    autoplay: true,
	autoplaySpeed: 2000,
	arrows: false,
	slidesToShow: 4
  });
});
