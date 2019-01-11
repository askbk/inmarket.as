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
    <div class="margin-top-100 bgimg-int_drammen height-27em parallax-img">
    </div>
    <div class="w3-content w3-xlarge">
        <!-- Tekst -->
        <article class="w3-container">
            <p>Bruker bedriften din <b>mye tid</b> på opplæring og rekruttering?</p>
            <p>Da bør dere sjekke ut InMarkets tilbud. Vi lar dere prøve ut elever, studenter, nyutdannede og andre arbeidssøkere.</p>
            <p>Liker dere kandidaten, kan vedkommende ansettes.</p>
        </article>

    </div>
    <!-- Fliser -->
    <div class="w3-center w3-large w3-card">
        <div class="w3-row">
            <div class="w3-col m6 flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front golden-bg dark-golden-hover uppercase w3-xlarge w3-display">
                        <div class="w3-display-middle">
                            <h2>
                                Elever
                            </h2>
                        </div>
                    </div>
                    <div class="flip-card-back white-bg w3-container">
                        <h3>Elever</h3>
                        <p>
                            Du kan velge å ha elever fra videregående skole nivå hos deg i 6 til 10 timer i måneden. InMarket har kontakt med skolen og lærerne slik at deres erfaring hos deg kan knyttes til det de lærer på skolen.​
                        </p>
                    </div>
                </div>
            </div>
            <div class="w3-col m6 flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front golden-bg dark-golden-hover uppercase w3-xlarge w3-display">
                        <div class="w3-display-middle">
                            <h2>
                                Studenter
                            </h2>
                        </div>
                    </div>
                    <div class="flip-card-back white-bg w3-container">
                        <h3>Studenter</h3>
                        <p>
                            Du kan velge å ha en student som tar sin bachelor eller mastergrad hos deg med jevne mellomrom. Her finner InMarket den relevante kandidaten og ordner med oppmøter.​
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col m6 flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front golden-bg dark-golden-hover uppercase w3-xlarge w3-display">
                        <div class="w3-display-middle">
                            <h2>
                                Trainees
                            </h2>
                        </div>
                    </div>
                    <div class="flip-card-back white-bg w3-container">
                        <h3>Trainees</h3>
                        <p>
                            Det er ikke alltid lett å finne de rette ansatte. Med traineeprogrammet vårt kan du få en kvalifisert arbeidstaker uten å forplikte deg til å ansette dem.​
                        </p>
                    </div>
                </div>
            </div>
            <div class="w3-col m6 flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front golden-bg dark-golden-hover uppercase w3-xlarge w3-display">
                        <div class="w3-display-middle">
                            <h2>
                                Jobbsøkere
                            </h2>
                        </div>
                    </div>
                    <div class="flip-card-back white-bg w3-container">
                        <h3>Jobbsøkere</h3>
                        <p>
                            Noen folk er ute etter å bygge relevant arbeidserfaring, finne gode verktøy og lage seg et godt nettverk. Velger du å ha en arbeidssøker hos deg blir det som å ha en «extended» intervju.​
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(".flip-card").on("click", function () {
            $(".flipped-card").removeClass("flipped-card")
            $(this).children().first().addClass("flipped-card");
        });
    </script>

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

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <script src="js/clientType.js" charset="utf-8"></script>
    <script src="js/contactForm.js" charset="utf-8"></script>
    <script async src="js/navbar.js" charset="utf-8"></script>
    <script src="js/acceptTracking.js" charset="utf-8"></script>
</body>

</html>
