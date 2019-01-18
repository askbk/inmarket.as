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
        <div class="bgimg-glade-flip parallax-img" style="height: calc(100vh - 100px);">
            <div class="w3-display-bottommiddle width-100 white-bg w3-card">
                <div class="w3-row width-100 mobile-large">
                    <div class="w3-col s6 hover-shadow-inset golden-button black-text open-info-box" id="plasser-button">
                        Elever
                    </div>
                    <div class="w3-col s6 hover-shadow-inset golden-button black-text open-info-box" id="stillinger-button">
                        Studenter
                    </div>
                </div>

                <div class="w3-center w3-content w3-large" id="plasser" style="display:none;">
                    <ul class="remove-list-things" style="">
                        <article class="w3-container">
                            <p>
                                InMarket ønsker å samarbeide med din utdanningsplass for at du skal få den beste muligheten til å forberede deg til arbeidslivet.​
                            </p>
                            <p>
                                Med oss kan du utvikle de egenskapene som får deg til å blomstre. Vi hjelper deg med å bygge erfaringer og kompetanse som er relevant for studier og karriere.​
                            </p>
                            <p>
                                Vi tilbyr frivillige stillinger som praktikanter i bedrifter, eller lønnede trainee stillinger. Arbeidstiden vil varier mellom 5 arbeidstimer i uken til 22 arbeidstimer i uken.
                            </p>
                            <a href="kontakt.php" class="black-button w3-card" style="white-space:normal;">SE OG SØK PÅ ÅPNE PROSJEKTPLASSER I DITT OMRÅDE</a>
                        </article>
                    </ul>
                </div>

                <div class="w3-center w3-content w3-large" id="stillinger" style="display:none;">
                    <ul class="remove-list-things" style="">
                        <article class="w3-container">
                            <p>
                                Vi holder oss tett koblet til utdanningsplassen din slik at du ikke behøver å bortprioritere dine studier. Ved å gjøre noe som aktivt kan kobles til studie ditt, vil du stå sterk til å velge veien din videre.
                            </p>
                            <p>
                                Som elev kan du kobles til høyere studier som kan være av interesse å få informasjon om tjenester og verv, erfaring i relevant virksomhet med mer.​
                            </p>
                            <p>
                                Vi kommuniserer med skolen din slik at du kan få faste tidspunkter i uken eller i måneden sammen med oss og våre samarbeidspartnere.
                            </p>
                            <a href="kontakt.php" class="black-button w3-card" style="white-space:normal;">SE OG SØK PÅ ÅPNE PROSJEKTPLASSER I DITT OMRÅDE</a>
                        </article>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="golden-bg">
        <div class="w3-row golden-bg w3-xlarge w3-content">
            <div class="w3-col l6 w3-container mobile-medium">
                <p class="quote">InMarket har latt meg drive med relevante, morsomme prosjekter ved siden av VGS. Jeg har nå større forståelse for hvorfor vi lærer det vi gjør, og føler meg godt ivaretatt.</p>
                <p class="quote-source">Anniken, elev 2. klasse Akademiet VGS</p>
            </div>
            <div class="w3-col l6 shadow-inset">
                <img src="img/elever/anniken-2.jpg" alt="" style="width:100%;">
            </div>
        </div>

        <div class="w3-row golden-bg w3-xlarge w3-content">
            <div class="w3-col l6 shadow-inset">
                <img src="img/portraits/ask_smal.jpg" alt="" style="width:100%;">
            </div>
            <div class="w3-col l6 w3-container mobile-medium">
                <p class="quote">InMarket lar meg få prøve meg i spennende prosjekter som er svært relevante i forhold til studiet mitt.</p>
                <p class="quote-source">Ask Berstad Kolltveit, student datateknologi NTNU</p>
            </div>
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
