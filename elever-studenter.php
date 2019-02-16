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
            <div class="w3-display-topmiddle w3-xxlarge white-text margin-top-100 width-100 w3-content w3-container">
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

                <div class="w3-content w3-large" id="stillinger" style="display:none;">
                    <article class="w3-container w3-section w3-row">
                        <div class="w3-col m3">
                            <?php // TEMP: bruker her ?>
                        </div>
                        <div class="w3-col m9">
                            <p>Lag deg en profil som kan dokumentere din aktivitet ute i virksomhetene.​</p>
                            <p>Med oss kan du utvikle de egenskapene som får deg til å blomstre. Vi hjelper deg med å bygge erfaringer og kompetanse som er relevant for studier og karriere.​</p>
                        </div>
                        <a href="kontakt.php" class="black-button w3-card" style="white-space:normal;">SE OG SØK PÅ ÅPNE PROSJEKTPLASSER I DITT OMRÅDE</a>
                    </article>
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
