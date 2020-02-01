<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once 'head.php'?>
        <title>App - InMarket</title>
    </head>
    <body>
        <?php 
        include_once 'nav.php';
        include_once 'cookie_notice.php';
        ?>

        <div class="container-fluid page3">

            <div class="row r1">
                <div class="col">

                    <h2 data-aos="fade-up"  data-aos-duration="900">Gamification, automatisk og responsiv</h2>
                    <p data-aos="fade-up"  data-aos-duration="800">Hva betyr alt det?</p>
                    <img src="app/css/img-mp4/app.jpg" alt="Appen">
                </div>
            </div>

            <div class="row r2">
                <div class="col">
                    <div class="box-1" data-aos="fade-down"  data-aos-duration="1000">
                        <h2 >Hva er Gamification</h2>
                        <p>
                        På norsk "Spillifisering", er anvendelsen av spilldesignelementer og spillprinsipper 
                        i situasjoner utenfor spill-sammenheng. <br><br>

                        InMarket bruker dette ved å lage spill, caser og spørsmål for å kartlegge interesser,
                        ferdigheter og holdninger.
                        </p>
                    </div>

                    <div class="box-2" data-aos="fade-down"  data-aos-duration="1000">
                        <h2>Automatiske prosesser</h2>
                        <p>
                        Hele appen er bygd opp slik at informasjonen som ligger inn blir automatisk lenket med 
                        hverandre. De beste matchene kommer opp som sterke anbefalinger for nettverk, 
                        aktivitet eller endring.
                        </p>
                    </div>

                    <div class="box-3" data-aos="fade-down"  data-aos-duration="1000">
                        <h2>Responsive profiler</h2>
                        <p>
                            Profilene er bygd opp slik at de responderer til informasjonen som legges inn 
                            i appen via gamification. Dette gjør at elevene, bedrifter, ansatte og lærere alltid vil 
                            være representert med de ferskeste hendelsene, handlingene og endringene som blir
                            gjort via appen.
                        </p>
                    </div>

                </div>
            </div>

            <div class="row r3">
                <div class="col">
                    <video autoplay preload muted playsinline loop id="iMvid2">
                        <source src="app/css/img-mp4/test.mp4" type="video/mp4">
                    </video>

                    <button class="fa fa-volume-up" onclick="sound2()" id="mute"></button>
                </div>
            </div>

            <div class="row r4">
                <div class="col">
                    <h2 data-aos="fade-up"  data-aos-duration="900">MVP</h2>
                    <p data-aos="fade-up"  data-aos-duration="900"> 
                        Beta versjonen av appen har blitt bygd og lansert. Denne bygger InMarket på
                        for å kunne presentere den ferdigstile appen ila. 2020. <br><br>

                        <b>Funkjsoner:</b> <br>
                        Automatisert matching <br>
                        Chat <br>
                        Planleggingsverktøy <br>
                        Monitoreringsfunksjon for skolene
                    </p> <br><br>

                    <h2 data-aos="fade-up"  data-aos-duration="900">V.01</h2>
                    <p data-aos="fade-up"  data-aos-duration="900">
                        Første versjon av appen blir ferdigstilt ila. 2020 og lansert på googleplay og 
                        app-store. Dette vil medføre følgende funksjoner: <br><br>
                        Gamification <br>
                        Responsive desing <br>
                        Responsive profiling <br>
                        Rapportering
                    </p>
                </div>
            </div>

        </div>

        <?php 
        include_once 'footer.php';
        include_once 'script.php';
        ?>
    </body>
</html>