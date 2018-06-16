let container = document.getElementById("driver-med-slideshow");
let slides = document.getElementsByClassName("driver-med-slides");
let bubble1 = document.getElementById("slideshow-bubble-1");
let bubble2 = document.getElementById("slideshow-bubble-2");
let bubble3 = document.getElementById("slideshow-bubble-3");
let i = 2, prev = 0;

var slideInterval = setInterval(slideshow,2500);

function resetSlideshow() {
    for(let j = 0; j < 3; ++j) {
        slides[j].style.display = "none";
    }

    slides[i].style.display = "block";
}

function slideshow() {
    prev = (i++) % 3;
    i %= 3;

    slides[prev].style.display = "none";
    slides[i].style.display = "block";
}

function bubbleMouseOver(n) {
    clearInterval(slideInterval);
    slides[i].style.display = "none";
    slides[n - 1].style.display = "block";
}

function bubbleMouseOut() {
    resetSlideshow();
}

container.onmouseover = function() {
    clearInterval(slideInterval);
}

container.onmouseout = function() {
    slideInterval = setInterval(slideshow,2500);
}
