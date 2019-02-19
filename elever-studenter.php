<!DOCTYPE html>
<html>

<head>
    <title>Studenter og elever | InMarket Norge</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>
    <div class="w3-display-container margin-top-100" id="hjem">
        <div class="bgimg-glade-flip-dark parallax-img" style="height: calc(100vh - 100px);">
            <div class="w3-display-middle w3-xxlarge white-text margin-top-100 width-100 w3-content w3-container">
                <p>Bygg opp din kompetanse og skaff deg erfaringer slik at du lettere kan bli klar til å jobbe.</p>
            </div>
            <div class="w3-display-bottommiddle width-100 white-bg w3-card">
                <div class="w3-row width-100 mobile-large">
                    <div class="w3-col s6 hover-shadow-inset golden-button black-text open-info-box" id="plasser-button">
                        Elever
                    </div>
                    <div class="w3-col s6 hover-shadow-inset golden-button black-text open-info-box" id="stillinger-button">
                        Studenter
                    </div>
                </div>

                <div class="w3-content mobile-medium" id="plasser" style="display:none;">
                    <article class="w3-container w3-section w3-row">
                        <!-- <div class="w3-col m3">
                            <?php // TEMP: bruker her ?>
                        </div>
                        <div class="w3-col m9">
                        </div> -->
                        <div class="w3-center">
                            <p>Lag deg en profil som kan dokumentere din aktivitet ute i virksomhetene.​</p>
                            <p>​Vi holder oss tett koblet til utdanningsplassen din slik at du ikke behøver å bortprioritere dine studier. Ved å gjøre noe som aktivt kan kobles til studie ditt, vil du stå sterk til å velge veien din videre.</p>
                            <a href="kontakt.php" class="black-button w3-card" style="white-space:normal;">SØK PÅ ÅPNE PROSJEKTPLASSER I DITT OMRÅDE</a>
                        </div>
                    </article>
                </div>

                <div class="w3-content mobile-medium" id="stillinger" style="display:none;">
                    <article class="w3-container w3-section w3-row">
                        <!-- <div class="w3-col m3">
                            <?php // TEMP: bruker her ?>
                        </div>
                        <div class="w3-col m9">
                        </div> -->
                        <div class="w3-center">
                            <p>Lag deg en profil som kan dokumentere din aktivitet ute i virksomhetene.​</p>
                            <p>Med oss kan du utvikle de egenskapene som får deg til å blomstre. Vi hjelper deg med å bygge erfaringer og kompetanse som er relevant for studier og karriere.​</p>
                            <a href="kontakt.php" class="black-button w3-card" style="white-space:normal;">SØK PÅ ÅPNE PROSJEKTPLASSER I DITT OMRÅDE</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-section" style="max-width:870px;margin:auto;">
        <div class="w3-padding-32 w3-container w3-center mobile-xxlarge" style="padding-left:25px;">
            <div class="w3-left w3-mobile" style="width:225px; padding-top:30px;">
                <img src="img/fig/arbeidssokere.png" alt="Figure" style="width:100%;">
                <p>Elever og studenter</p>
            </div>


            <div class="w3-left w3-mobile testt" >
                <div class="w3-row">
                    <div class="w3-col m3 w3-hide-small" style="padding-top:30px;">
                        <object type="image/svg+xml" data="img/fig/arrow-right.svg" class="w3-left" style="width:100%"></object>
                    </div>
                    <div class="w3-col m3 w3-hide-medium w3-hide-large">
                        <object type="image/svg+xml" data="img/fig/arrow-down.svg" class="" style="width:90px"></object>
                    </div>
                    <div class="w3-col m9" style = "line-height: 0.5; ">
                        <p>Aktiviteter</p>
                        <p>Prosjekter</p>
                        <p>Ledige stillinger</p>
                        <p>Workshop og kurs</p>
                    </div>
                </div>
            </div>

            <div class="w3-left w3-mobile testt" >
                <div class="w3-row">
                    <div class="w3-col m3 w3-hide-small" style="padding-top:30px;">
                        <object type="image/svg+xml" data="img/fig/arrow-right.svg" class="w3-left" style="width:100%"></object>
                    </div>
                    <div class="w3-col m3 w3-hide-medium w3-hide-large">
                        <object type="image/svg+xml" data="img/fig/arrow-down.svg" class="" style="width:90px"></object>
                    </div>
                    <div class="w3-col m9" style="padding-top:30px;">
                        <img src="img/fig/ledelse.jpg" alt="Figure" style="width:35%;">
                        <p>Arbeidsgivere</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="w3-row w3-xlarge w3-content w3-padding-32">
        <div class="w3-col m2">
            <img src="img/elever/anniken-square.jpg" alt="" style="width:100%;">
        </div>
        <div class="w3-col m10 w3-container mobile-medium text-align-right">
            <p class="quote">InMarket har latt meg drive med relevante, morsomme prosjekter ved siden av VGS. Jeg har nå større forståelse for hvorfor vi lærer det vi gjør, og føler meg godt ivaretatt.</p>
            <p class="quote-source">Anniken, elev 2. klasse Akademiet VGS</p>
        </div>
    </div>

    <script type="text/javascript">
        $(".open-info-box").on("click", function (e) {
            e.stopPropagation();
            $(".shadow-inset").removeClass("shadow-inset");
            $(this).toggleClass("shadow-inset");
            if ($(this).attr("id") == "plasser-button") {
                if ($("#plasser").css("display") == "none") {
                    $("#stillinger").slideUp();
                    $("#plasser").slideDown();
                } else {
                    closeInfobox();
                }
            } else if ($(this).attr("id") == "stillinger-button") {
                if ($("#stillinger").css("display") == "none") {
                    $("#plasser").slideUp();
                    $("#stillinger").slideDown();
                } else {
                    closeInfobox();
                }
            }
        });

        $(".bgimg-glade-flip").on("click", function () {
            closeInfobox();
        });

        function closeInfobox() {
            $(".shadow-inset").removeClass("shadow-inset");
            $("#stillinger").slideUp();
            $("#plasser").slideUp();
        }
    </script>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <script src="js/detectIphone.js" charset="utf-8"></script>
    <script async src="js/navbar.js" charset="utf-8"></script>
    <script src="js/acceptTracking.js" charset="utf-8"></script>
</body>

</html>
