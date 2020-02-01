// aktiv lenke
for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'active';
    }
  };

function openNav(){
    if(document.getElementById("nav").style.width == "75%"){
        document.getElementById("nav").style.width = "0";

        document.getElementById("bars").style.color = "black";
    } else {
        document.getElementById("nav").style.width = "75%";

        document.getElementById("bars").style.color = "#C38F43";
    }
};