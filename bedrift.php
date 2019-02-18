<!DOCTYPE html>
<html>

<head>
    <title>Bedrift | InMarket Norge</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>
    <!-- Toppbilde -->
    <div class="margin-top-100 bgimg-einar_samuel full-height parallax-img w3-display-container">
        <div class="w3-display-middle white-text w3-xxlarge w3-center">
            <p>Med InMarket kan du påvirke potensialet i det norske arbeidsmarked.​</p>
            <p>Du styrer og vi hjelper.</p>
        </div>
    </div>

    <div class="w3-content w3-xlarge w3-center">
        <div class="w3-row">
            <!-- TODO: Legge til figurer-->
        </div>
        <div class="narrow-content">
            <p class="w3-xlarge">InMarket lar din bedrift legge ut og invitere elever, studenter og arbeidsledige. Her bestemmer du selv hva du inviterer til, og du oppnår kontakt med de som har relevant faglig kompetanse eller interesse.</p>
            <hr>
        </div>
        <div class="">
            <p>Vil du knytte kontakt med potensielle arbeidstakere og hjelpe dem med å bygge relevant kompetanse og erfaring?​ Du bestemmer aktivitet, sted, dato, tid og kandidat.​</p>
            <p class="w3-xxlarge"> <strong>VI LANSERER PLATTFORMEN I LØPET AV SOMMER 2019!​</strong> </p>
        </div>
        <div class="w3-row w3-row-padding w3-medium w3-padding-64">
            <div class="w3-col m2">
                <img src="img/partners/chris.jpg" alt="" style="width:100%;">
            </div>
            <div class="w3-col m10 w3-container text-align-left">
                <p class="quote">Samarbeidet med InMarket har gitt oss en super mulighet til å komme tett på og bli bedre kjent med dagens ungdom. Dette har gitt oss ny innsikt, nye og spennende vinklinger på saker og ideer vi ikke ville tenkt på selv. Vi har også møtt flere unge medietalenter og en av elevene har nå fått kontrakt som tilkallingsvikar hos oss.</p>
                <p class="quote-source">Chris Carlsen, distriktsleder <strong>NRK Buskerud</strong></p>
            </div>
        </div>
    </div>

    <div class="w3-center w3-large width-100" id="plasser" style="">
        <ul class="remove-list-things" style=" margin:0;">
            <li class="listing hover-shadow-inset w3-container golden-bg w3-padding" style="margin-top:0;">
                <div class="w3-xlarge cursor-pointer">
                    Elever
                </div>
                <div class="open-text" style="display:none;">
                    <p class="w3-content">Du kan velge å ha elever fra videregående skole nivå hos deg. InMarket har kontakt med skolen og lærerne slik at deres erfaring hos deg kan knyttes til det de lærer på skolen.​</p>
                </div>
            </li>

            <li class="listing hover-shadow-inset w3-container golden-bg w3-padding" style="margin-top:0;">
                <div class="w3-xlarge cursor-pointer">
                    Studenter
                </div>
                <div class="open-text" style="display:none;">
                    <p class="w3-content">Du kan velge å ha en student som tar sin bachelor eller mastergrad hos deg med jevne mellomrom. Disse har ny og relevant kompetanse.</p>
                </div>
            </li>
            <li class="listing hover-shadow-inset w3-container golden-bg w3-padding" style="margin-top:0;">
                <div class="w3-xlarge cursor-pointer">
                    Jobbsøkere
                </div>
                <div class="open-text" style="display:none;">
                    <p class="w3-content">Noen folk er ute etter å bygge relevant arbeidserfaring, finne gode verktøy og lage seg et godt nettverk. Velger du å ha en arbeidssøker hos deg blir det som å ha en «extended» intervju.​</p>
                </div>
            </li>
        </ul>
        <a href="kontakt.php" class="black-button w3-xlarge width-100 w3-card">
            Kontakt oss
        </a>
    </div>

    <?php include_once 'templates/workshop.php'; ?>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>

    <script type="text/javascript">
        $(".open-info-box").on("click", function () {
            closeListings();
            if ($(this).hasClass("open")) {
                $("#stillinger").slideUp();
                $("#plasser").slideUp();
                $(".open").removeClass("open shadow-inset");
                return;
            }
            $(".open").removeClass("open shadow-inset");
            $(this).addClass("open shadow-inset");
            if ($(this).attr("id") == "plasser-button") {
                $("#stillinger").slideUp();
                $("#plasser").slideDown();
            } else if ($(this).attr("id") == "stillinger-button") {
                $("#plasser").slideUp();
                $("#stillinger").slideDown();
            }
        });

        $(".listing").on("click", function () {
            if (!$(this).hasClass("open")) {
                closeListings();
                $(this).children(".open-text").slideDown();
                $(this).addClass("open shadow-inset").removeClass("golden-bg");
            }
        });

        function closeListings() {
            $(".listing").removeClass("shadow-inset open").addClass("golden-bg")
            $(".open-text").slideUp();
        }
    </script>
    <script src="js/clientType.js" charset="utf-8"></script>
    <script src="js/contactForm.js" charset="utf-8"></script>
    <script async src="js/navbar.js" charset="utf-8"></script>
    <script src="js/acceptTracking.js" charset="utf-8"></script>
</body>

</html>
