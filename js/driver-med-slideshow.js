let container = document.getElementById("driver-med-slideshow");
let slides = document.getElementsByClassName("driver-med-slides");
let i = 2;

slideshow();

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function slideshow() {
    while(true) {

        let prev = (i++) % 3;
        i %= 3;

        slides[prev].style.opacity = "0";
        slides[i].style.opacity = "1";

        await sleep(2500);
        console.log("nut" + i);
    }
}
