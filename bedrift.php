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

    <div class="narrow-content w3-container margin-top-100 w3-padding-64">
        <div class="w3-row w3-section">
            <div class="w3-col m8">
                <div class="translatey-40">
                    <p>Bruker bedriften din <b>mye tid</b> på opplæring og rekruttering? Da bør dere sjekke ut InMarkets trainee-program, <b>InTrainee</b>. Dette lar dere prøve ut elever, studenter eller nyutdannede. Liker dere kandidaten, kan vedkommende ansettes på heltid.</p>
                </div>
            </div>
            <div class="w3-col m4 text-align-right small-center">
                <img src="img/elever/kameramann.jpg" alt="" class="w3-circle white-border">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col m4 small-center">
                <img src="img/elever/anniken.jpg" alt="" class="w3-circle white-border">
            </div>
            <div class="w3-col m8">
                <div class="translatey-40">
                    <p><b>Feilansettelser er dyrt.</b> En feilansettelse kan koste bedriften din opp mot 500.000 kr. Gjennom InTrainee blir dere kjent med nye kandidater månedlig. Ansettelsesprosessen blir tryggere for både bedriften og kandidaten.</p>
                </div>
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col m8">
                <div class="translatey-40">
                    <p><b>Vi kjenner kandidatene våre godt.</b> Vi følger løpet fra elevene går på VGS til de er ferdigutdannede. Dette skaper kunnskap om stillinger kandidatene utmerker seg til. Dermed finner vi kandidatene som passer best til deres bedrift.</p>
                </div>
            </div>
            <div class="w3-col m4 text-align-right small-center">
                <img src="img/elever/kontordag.jpg" alt="" class="w3-circle white-border">
            </div>
        </div>

        <p class="w3-section">Prøv InMarkets trainee-program i dag dere også! Vi skreddersyr et opplegg for deres bedrift. Kontakt oss nå for en uforpliktende samtale:</p>
    </div>

    <!-- Kontaktskjema -->
    <div class="w3-content w3-container w3-section" id="kontakt">
        <div class="">
            <form class="w3-large w3-container" action="index.php" method="post" id="kontaktSkjema">
                <div class="w3-row">
                    <div class="w3-col m3">
                        <label>
                            <input type="radio" name="client" value="elev" class="klient-radio" onclick="elevSelected()">
                            <i class="fas fa-user w3-xlarge radio"></i>
                            Elev
                        </label><br>
                        <label>
                            <input type="radio" name="client" value="student" class="klient-radio" onclick="studentSelected()">
                            <i class="fas fa-user-graduate w3-xlarge radio"></i>
                            Student
                        </label><br>
                        <label>
                            <input type="radio" name="client" value="bedrift" class="klient-radio" checked onclick="bedriftSelected()">
                            <i class="fas fa-user-tie w3-xlarge radio"></i>
                            bedrift
                        </label>
                    </div>
                    <div class="w3-col m9">
                        <input type="text" name="name" value="" placeholder="Navn" class="w3-input w3-animate-input" required id="inputName"><br>
                        <input type="text" name="place" value="" placeholder="bedrift" id="inputPlace" class="w3-input w3-animate-input" required id="inputPlace"><br>
                        <input type="text" name="phone" value="" placeholder="Telefon" class="w3-input w3-animate-input" required id="inputPhone"><br>
                        <input type="checkbox" name="" value="" required> <label>Jeg har lest og godtatt <a href="personvern.php" style="text-decoration:underline;" target="_blank">personvernerklæringen</a> </label>
                        <button class="white-button w3-card w3-right" type="submit"><i class="fas fa-paper-plane"></i> SEND</button>
                        <p id="responseText"></p>
                    </div>
                </div>
            </form>
            <div class="w3-section w3-card w3-container" id="kontaktRespons" style="display:none;">
                <p class="w3-center">Takk for henvendelsen! Vi tar kontakt med deg så raskt som mulig!</p>
            </div>
        </div>
    </div>

    <!-- container for quotes -->
    <div class="narrow-content w3-container">
        <h2 class="w3-padding-32">Andres ord om oss</h2>

        <div class="w3-row" >
            <div class="w3-col m4 small-center w3-padding-32">
                <img src="img/partners/chris.jpg" alt="" class="w3-circle white-border w3-image">
            </div>
            <div class="w3-col m8 text-align-right">
                <div class="translatey-20">
                    <p class="quote">Samarbeidet med InMarket har gitt oss en super mulighet til å komme tett på og bli bedre kjent med dagens ungdom. Dette har gitt oss ny innsikt, nye og spennende vinklinger på saker og ideer vi ikke ville tenkt på selv. Vi har også møtt flere unge medietalenter og en av elevene har nå fått kontrakt som tilkallingsvikar hos oss.</p>
                    <p class="quote-source">Chris Carlsen, distriktsleder NRK Buskerud</p>
                </div>
            </div>
        </div>
        <div class="w3-row w3-padding-32" >
            <div class="w3-col m8">
                <div class="translatey-40">
                    <p class="quote">InMarket lar meg få prøve meg i spennende prosjekter som er svært relevante i forhold til studiet mitt.</p>
                    <p class="quote-source">Ask Kolltveit, student datateknologi NTNU</p>
                </div>
            </div>
            <div class="w3-col m4 small-center">
                <img src="img/portraits/ask_small.jpg" alt="" class="w3-circle white-border">
            </div>
        </div>

        <div class="w3-row w3-padding-32" >
            <div class="w3-col m4 small-center">
                <img src="img/partners/sara.jpg" alt="" class="w3-circle white-border">
            </div>
            <div class="w3-col m8 text-align-right">
                <div class="translatey-40">
                    <p class="quote">Med InMarket ønsker Comfort Hotell på Union Brygge å bygge en plattform hvor kreative ungdommer kan utrykke seg og vise hva de er gode til. Her åpner vi dørene for foredrag, privatkonserter, pizzakvelder og andre arrangementer.</p>
                    <p class="quote-source">Sara Jensen, hotelldirektør Union Brygge</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <script src="js/clientType.js" charset="utf-8"></script>
    <script src="js/contactForm.js" charset="utf-8"></script>
    <script async src="js/navbar.js" charset="utf-8"></script>
    <script src="js/acceptTracking.js" charset="utf-8"></script>
</body>

</html>
