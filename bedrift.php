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
        <p class="w3-large">InMarket lar din bedrift legge ut og invitere elever, studenter og arbeidsledige. Her bestemmer du selv hva du inviterer til, og du oppnår kontakt med de som har relevant faglig kompetanse eller interesse.</p>
        <hr>
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

    <div class="w3-display-container parallax-img bgimg-allinclusive-2" style="height:450px;">
        <div class="w3-display-bottommiddle text-shadow w3-jumbo white-text">
            WORKSHOP MED ALL INCLUSIVE TALK
        </div>
    </div>

    <article class="w3-content mobile-medium w3-container">
        <p>Alle lærer seg teknikker for å skape seg en trygg grunnmur, som kan adapteres på alle scener og i alle situasjoner.​</p>
        <p>Vi gir din bedrift konkrete verktøy og løsninger for å mestre det å kommunisere.</p>
    </article>

    <a href="workshop.php" class="mobile-large width-100 w3-card w3-center golden-button">
        FORM DIN WORKSHOP
    </a>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>

    <script type="text/javascript">
    $(".flip-card").on("click", function () {
        $(".flipped-card").removeClass("flipped-card")
        $(this).children().first().addClass("flipped-card");
    });
    </script>
    <script src="js/clientType.js" charset="utf-8"></script>
    <script src="js/contactForm.js" charset="utf-8"></script>
    <script async src="js/navbar.js" charset="utf-8"></script>
    <script src="js/acceptTracking.js" charset="utf-8"></script>
</body>

</html>
