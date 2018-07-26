if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPod/i))) {
	 let parallaxImgs = document.getElementsByClassName("parallax-img");

     for (img of parallaxImgs) {
         img.style.backgroundAttachment = "scroll";
     }
}
