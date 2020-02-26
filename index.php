<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'head.php'?>
        <title>Velkommen - InMarket</title>
    </head>
    <body>
        <?php 
        include_once 'nav.php';
        include_once 'cookie_notice.php';
        ?>

        <div class="container-fluid page1">

            <div class="row r1 bg">
                <div class="col">
                    <div class="d-bg"></div>
                   <h1 data-aos="zoom-in-up"  data-aos-duration="1000">Vi bygger karriere helt fra 
                       videregående skole
                   </h1>

                   <button class="arrow arrow-d" onclick="downOne()"></button>
                </div>
            </div>

            <div class="row r2">
                <div class="col c1" id="c1">

                    <div class="p1">
                        <div class="fa fa-dollar mid" data-aos="zoom-in-up"  data-aos-duration="1200"></div>
                        <h1 data-aos="zoom-in"  data-aos-duration="800">Gratis</h1>
                        <p data-aos="zoom-in"  data-aos-duration="800">
                            Vår app er 100% gratis for alle elever. Vi gjør det morsomt å utvikle seg
                            med spill, caser og korte prosjekter.
                        </p>
                    </div>

                    <div class="p1">
                        <div class="fa fa-user mid" data-aos="zoom-in-up"  data-aos-duration="1200"></div>
                        <h1 data-aos="zoom-in"  data-aos-duration="800">Enkelt</h1>
                        <p data-aos="zoom-in"  data-aos-duration="800">
                            Vi hjelper deg med å finne dine interesser, trene opp ferdigheter og 
                            bygge erfaringer som kan hjelpe på CV-en.
                        </p>
                    </div>

                    <div class="p1">
                        <div class="fa fa-briefcase mid" data-aos="zoom-in-up"  data-aos-duration="1200"></div>
                        <h1 data-aos="zoom-in"  data-aos-duration="800">Nettverk</h1>
                        <p data-aos="zoom-in"  data-aos-duration="800">
                            Appen kobler deg til relevante arbeidsplasser. Her kan du bygge nettverk,
                            finne jobb og utvikle deg.
                        </p>
                    </div>

                    <a href="appen.php"><button class="but butb">Mer Om Appen</button></a>

                </div>
            </div>

            <div class="row r3">
                <div class="col">
                    <h2 data-aos="zoom-in"  data-aos-duration="800">Utviklet sammen med:</h2>
                    <a href="https://www.innovasjonnorge.no/" target="_blank">
                        <img src="index/css/img-mp4/innovasjon_norge.png" alt="IN" data-aos="zoom-in-up"  data-aos-duration="1200">
                    </a>

                    <a href="https://www.charge.no/" target="_blank">
                        <img src="index/css/img-mp4/charge.png" alt="Charge" data-aos="zoom-in-up"  data-aos-duration="1200">
                    </a>
                    
                    <a href="https://www.inligo.no/" target="_blank">
                        <img src="index/css/img-mp4/inligo.png" alt="Inligo" data-aos="zoom-in-up"  data-aos-duration="1200">
                    </a>
                    
                    <a href="https://www.akademiet.no/?gclid=CjwKCAiA98TxBRBtEiwAVRLquz0PEB3kCxcUmS57Qmpzk42jzbJfARP2V-j8fI0hBAhSZZgTQCKj8BoC3g8QAvD_BwE" target="_blank">
                        <img src="index/css/img-mp4/Akademiet- Svart.png" alt="Aka" class="hide" data-aos="zoom-in-up"  data-aos-duration="1200">
                    </a>

                    <a href="https://www.jrc.no/" target="_blank">
                        <img src="index/css/img-mp4/jr.png" alt="JR" class="hide" data-aos="zoom-in-up"  data-aos-duration="1200">
                    </a>
                    
                </div>
            </div>

        </div>

        <?php 
        include_once 'footer.php';
        include_once 'script.php';
        ?>
    </body>
</html>