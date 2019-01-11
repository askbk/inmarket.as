<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Kontakt oss | InMarket Norge</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="Rådgivning kombinert med jobbskygging og mentoring. Møt fremtiden din og la den forme deg.">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#c08d42">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="fontawesome-free-5.1.0-web/css/all.css">
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/w3pro.css" />
    <script type="application/ld+json" href="json/about.json"></script>
    <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="js/jquery.color-2.1.2.min.js" charset="utf-8"></script>
    <!-- Hotjar Tracking Code for imnor.no -->
    <script>
        if (localStorage.tracking == "true") {
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:959986,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
                console.log("hotjar enabled");
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        }
    </script>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>

    <!-- Container (kontakt oss) -->
    <div class="w3-content w3-container w3-padding-64 margin-top-100" id="kontakt" style="min-height: calc(100vh - 300px);">
        <h1 class="w3-center" id="kontaktHeader">Kontakt oss</h1>
        <div class="">
            <form class="w3-large w3-container" action="index.php" method="post" id="kontaktSkjema">
                <p class="w3-center">Legg igjen kontaktinformasjon her, så ringer vi deg innen et døgn <i class="fas fa-arrow-down"></i></p>
                <div class="w3-row">
                    <div class="w3-col m3">
                        <label>
                            <input type="radio" name="client" value="elev" class="klient-radio" checked onclick="elevSelected()">
                            <i class="fas fa-user w3-xlarge radio"></i>
                            Elev
                        </label><br>
                        <label>
                            <input type="radio" name="client" value="student" class="klient-radio" onclick="studentSelected()">
                            <i class="fas fa-user-graduate w3-xlarge radio"></i>
                            Student
                        </label><br>
                        <label>
                            <input type="radio" name="client" value="bedrift" class="klient-radio" onclick="bedriftSelected()">
                            <i class="fas fa-user-tie w3-xlarge radio"></i>
                            bedrift
                        </label>
                    </div>
                    <div class="w3-col m9">
                        <input type="text" name="name" value="" placeholder="Navn" class="w3-input w3-animate-input" required id="inputName"><br>
                        <input type="text" name="place" value="" placeholder="Videregående skole" id="inputPlace" class="w3-input w3-animate-input" required id="inputPlace"><br>
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
    <script src="js/detectIphone.js" charset="utf-8"></script>
    <script async src="js/navbar.js" charset="utf-8"></script>
    <script src="js/acceptTracking.js" charset="utf-8"></script>
</body>

</html>
