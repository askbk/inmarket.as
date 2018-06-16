let container = document.getElementById("driver-med-slideshow");
let slides = document.getElementsByClassName("driver-med-slides");
let i = 2;

var slideInterval = setInterval(slideshow,2500);

slideshow();


function slideshow() {

    let prev = (i++) % 3;
    i %= 3;

    slides[prev].style.display = "none";
    slides[i].style.display = "block";
}

container.onmouseover = function() {
    clearInterval(slideInterval);
}

container.onmouseout = function() {
    slideInterval = setInterval(slideshow,2000);
}
