const iframes = document.querySelectorAll("iframe.vimeo-video"),
    videos = [],
    fraction = 0.55;
for (let iframe of iframes) {
    videos.push(new Vimeo.Player(iframe));
}

window.addEventListener('scroll', function() {
    for (let i = 0, len = iframes.length; i < len; i++) {
        if (iframes[i].clientHeight === 0) {
            videos[i].pause();
            continue;
        }
        const elRect = iframes[i].getBoundingClientRect();
        const h = window.innerHeight,
            t = elRect.top,
            b = elRect.bottom;
        const elHeight = b - t;
        // console.log(`${h} ${t} ${b}`);
        const shouldPause = b < (elHeight * 0.55) || h - t < elHeight * 0.55;
        if (shouldPause) {
            videos[i].pause()
        } else {
            videos[i].play();
        }
    }
});
