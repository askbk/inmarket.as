//mut and umnute video
function sound2(){
    var vid2 = document.getElementById("iMvid2");
    var vol2 = document.getElementById("mute");

    if (vid2.muted == true) {    
        vid2.muted = false;

        vol2.classList.remove("fa-volume-up");
        vol2.classList.add("fa-volume-off");
    } else {
        vid2.muted = true;
        vol2.classList.remove("fa-volume-off");
        vol2.classList.add("fa-volume-up");
    }
}