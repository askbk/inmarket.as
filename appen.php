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
                    <p data-aos="fade-up"  data-aos-duration="800">En bedre måte å finne det som er mest relevant for deg.</p>
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
                        aktivitet eller prosjekt.
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

                    <button class="fa fa-volume-off" onclick="sound2()" id="mute"></button>
                </div>
            </div>

            <div class="row r4">
                <div class="col" id="r4c1">
                    
                    <h2>Allerede nå kan du:<h2> <br><br>

                    <img src="app/css/img-mp4/profbild.jpeg" alt="profilbide" id="profilbilde">
                    <p id="mV1">
                        <b>Mille Nord</b> <br>
                        Elev, <i>Aktiv Vgs</i> <br>
                        16år
                    </p> <br><br>

                    <p>1) Legge til profilbide og kort personalia</p> <br><br>

                    <img src="app/css/img-mp4/velg.png" alt="valg" id="valg"><br><br>
                    <p>2) Velge ferdigheter, interesser og bransje</p> <br><br>

                    <img src="app/css/img-mp4/chat.png" alt="chat" id="chat"><br><br>
                    <p>3) Bygge nettverk, kommunisere og planlegge møter med relevante personer</p>
                    
                </div>

                <div class="w-100"></div>

                <div class="col" id="r4c2">
                    <h2>Til neste versjon:</h2> <br><br>

                    <img src="app/css/img-mp4/profbild.jpeg" alt="profilbide" id="profilbilde">
                    <p id="mV2">
                        <b>Mille Nord</b> <br>
                        Elev, <i>Aktiv Vgs</i> <br>
                        16år
                    </p> <br><br>

                    <p>1) Dynamisk software med bedre brukervennlighet</p> <br><br>

                    <img src="app/css/img-mp4/dynamisk.png" alt="dynamisk" id="dynamisk"><br><br>
                    <p>2) Interaktiv profil som følger utviklingen din og dine aktiviteter</p> <br><br>

                    <img src="app/css/img-mp4/prog.png" alt="progresjon" id="prog"><br><br>
                    <p>3) Enkel indikator for å følge med på utvikling, måloppnåelse, statistikk og data.</p>
                </div>

            </div>
        </div>

        <?php 
        include_once 'footer.php';
        include_once 'script.php';
        ?>
    </body>
</html>