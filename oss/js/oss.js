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
    if(document.getElementById("omIm").style.height == "100vh"){
        document.getElementById("omIm").style.height = "55vh";

        
      } else {
        document.getElementById("omIm").style.height = "100vh";
      };
};

function narrow(){
    if(document.getElementById("omIm").style.height == "130vh"){
        document.getElementById("omIm").style.height = "55vh";
      } else {
        document.getElementById("omIm").style.height = "130vh";
      };
}
