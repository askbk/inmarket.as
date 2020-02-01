//mut and umnute video
function sound(){
    var vid = document.getElementById("iMvid");
    var vol = document.getElementById("mute");

    if (vid.muted == true) {    
        vid.muted = false;

        vol.classList.remove("fa-volume-up");
        vol.classList.add("fa-volume-off");
    } else {
        vid.muted = true;
        vol.classList.remove("fa-volume-off");
        vol.classList.add("fa-volume-up");
    }
}

//scroll down
function downOne(){
    var element = document.getElementById('c1');
  element.scrollIntoView({behavior: 'smooth', block: 'start'});
  };