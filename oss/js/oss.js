//Mer om hvordan InMarket har gått frem
var x = window.matchMedia("(min-width: 768px)"); 
element.addListener("click", merTest(x));

function merTest(x){ 
    if (x.matches) { 
        return this.narrow();
    } else {
        return this.wide();
    }
};

var wide = wide();
var narrow = narrow();

function wide(){
    if(document.getElementById("navigate").style.width == "80vw"){
        document.getElementById("navigate").style.width = "0";
      } else {
        document.getElementById("navigate").style.width = "80vw";
      };
};

function narrow(){
    if(document.getElementById("navigate").style.width == "30vw"){
        document.getElementById("navigate").style.width = "0";
      } else {
        document.getElementById("navigate").style.width = "30vw";
      };
}
