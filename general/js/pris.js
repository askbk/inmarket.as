function prisEn(){

    if(document.getElementById("pakke1").style.height == "30vh"){

        document.getElementById('pris').style.height = "240vh";
        document.getElementById('pakker').style.height = "240vh";
        document.getElementById("pakke1").style.height = "125vh";

        document.getElementById('mer1').style.top = '120vh';
        document.getElementById('phide').style.display = 'block';

    } else {
        document.getElementById("pakke1").style.height = "30vh";
        document.getElementById('pris').style.height = "120vh";
        document.getElementById('pakker').style.height = "120vh";

        document.getElementById('mer1').style.top = '25vh';
        document.getElementById('phide').style.display = 'none';
    }   
}

function prisTo(){

    if(document.getElementById("pakke2").style.height == "30vh"){

        document.getElementById('pris').style.height = "240vh";
        document.getElementById('pakker').style.height = "240vh";
        document.getElementById("pakke2").style.height = "145vh";

        document.getElementById('mer2').style.top = '140vh';
        document.getElementById('phide2').style.display = 'block';
    } else {
        document.getElementById("pakke2").style.height = "30vh";
        document.getElementById('pris').style.height = "120vh";
        document.getElementById('pakker').style.height = "120vh";

        document.getElementById('mer2').style.top = '25vh';
        document.getElementById('phide2').style.display = 'none';
    }   
}

function prisTre(){

    if(document.getElementById("pakke3").style.height == "30vh"){

        document.getElementById('pris').style.height = "240vh";
        document.getElementById('pakker').style.height = "240vh";
        document.getElementById("pakke3").style.height = "135vh";

        document.getElementById('mer3').style.top = '130vh';
        document.getElementById('phide3').style.display = 'block';
    } else {
        document.getElementById("pakke3").style.height = "30vh";
        document.getElementById('pris').style.height = "120vh";
        document.getElementById('pakker').style.height = "120vh";

        document.getElementById('mer3').style.top = '25vh';
        document.getElementById('phide3').style.display = 'none';
    }   
}