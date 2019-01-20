<!DOCTYPE html>
<html>

<head>
    <title>InMarket Norge - viser veien videre</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body itemscope itemtype="http://schema.org/Organization">
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>

    <!-- Slideshow-->
    <div class="slideshow w3-display-container margin-top-100 white-text" id="hjem">
        <div class="bgimg-allinclusive-1 mySlides parallax-img">
            <div class="w3-card-4 slideshowText w3-display-bottomright black-bg-opac-80 uppercase">
                DU FÅR TILGANG TIL ENGASJERTE OG DYKTIGE UNGDOMMER.​ SE HVA VI KAN TILBY OG BLI VÅR PARTNER!
            </div>
        </div>

        <div class="bgimg-christian-kamera mySlides parallax-img" style="display:none;">
            <h1 class="w3-display-bottomright" style="right:10%;padding: 6px;margin-bottom: 32px;">Viser veien videre</h1>
        </div>

        <div class="bgimg-jenterpeker mySlides parallax-img" style="display:none;">
            <div class="w3-card-4 black-bg-opac-80 slideshowText w3-display-bottomright uppercase">
                HVORDAN VET DU AT JOBBEN ER RIKTIG FOR DEG VED Å BARE SE PÅ EN ANNONSE? LA OSS HJELPE DEG.
            </div>
        </div>
    </div>
    <div class="w3-row width-100 mobile-large">
        <div class="w3-col m4 hover-shadow-inset shadow-inset golden-button slide-indicator black-text indicator-active" n="0">
            Bedrifter
        </div>
        <div class="w3-col m4 hover-shadow-inset golden-button slide-indicator black-text" n="1">
            Elever og studenter
        </div>
        <div class="w3-col m4 hover-shadow-inset golden-button slide-indicator black-text" n="2">
            Jobbsøkere
        </div>
    </div>

    <div class="w3-card w3-bar white-bg w3-padding mobile-medium" style="display:none;" id="info-container">
        <div class="w3-content" id="bedrift" style="display:none;">
            <p class="height-5em-mobile">Jobb med oss slik at flere kan finne sin plass i det norske arbeidsmarkedet. Med InMarket får du tilgang til potensielle eller klare arbeidstakere. </p>
            <div class="w3-row w3-center">
                <div class="w3-col m6 w3-padding-small" style="padding: 0 2px;">
                    <a href="kontakt.php" class="black-button w3-card white-border width-100">
                        Kontakt oss
                    </a>
                </div>
                <div class="w3-col m6 w3-padding-small" style="padding: 0 2px;">
                    <a href="bedrift.php" class="black-button w3-card white-border width-100">
                        Mer
                    </a>
                </div>
            </div>
        </div>
        <div class="w3-content" id="elever-studenter" style="display:none;">
            <p class="height-5em-mobile">Vi ønsker å hjelpe deg med å utforske dine muligheter når du enten skal ta høyere utdanning, gå ut i arbeid eller oppleve verden.</p>
            <div class="w3-row w3-center">
                <div class="w3-col m6 w3-padding-small" style="padding: 0 2px;">
                    <a href="openings.php" class="black-button w3-card white-border width-100">
                        Åpne plasser
                    </a>
                </div>
                <div class="w3-col m6 w3-padding-small" style="padding: 0 2px;">
                    <a href="elever-studenter.php" class="black-button w3-card white-border width-100">
                        Mer
                    </a>
                </div>
            </div>
        </div>
        <div class="w3-content" id="jobb" style="display:none;">
            <p class="height-5em-mobile">Vi vil gi deg muligheten til å etablere deg i din bransje samtidig som du får tett oppfølging og godt nettverk. Vi har samarbeidspartnere som ønsker å møte deg.​</p>
            <div class="w3-row w3-center">
                <div class="w3-col m6 w3-padding-small" style="padding: 0 2px;">
                    <a href="openings.php" class="black-button w3-card white-border width-100">
                        Ledige stillinger
                    </a>
                </div>
                <div class="w3-col m6 w3-padding-small" style="padding: 0 2px;">
                    <a href="arbeidssoker.php" class="black-button w3-card white-border width-100">
                        Mer
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Partner logos -->
    <div class="white-text w3-padding-16 w3-content" id="partner-slideshow">
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://www.usn.no/" target="_blank"><img src="img/logos/usn.png" alt="Universitetet i Sørøst-Norge" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor" >
            <a href="https://www.akademiet.no" target="_blank"><img src="img/logos/akademiet.png" alt="Akademiet" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://www.drammen.kommune.no/" target="_blank"><img src="img/logos/kommune.png" alt="Drammen kommune" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="http://www.nrk.no/buskerud" target="_blank"><img src="img/logos/nrk.png" alt="NRK Buskerud" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://www.sparkntnu.no/" target="_blank"><img src="img/logos/spark.jpg" alt="NTNU Spark" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="http://nfdr.no/om-oss-medlemmer/bedrifter-i-naeringsforeningen?details=21626" target="_blank"><img src="img/logos/naeringsforeningen.png" alt="Næringsforeningen" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://cre8bd.weebly.com/" target="_blank"><img src="img/logos/cre8.png" alt="Cre8ive" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://www.allinclusivetalk.com/" target="_blank"><img src="img/logos/allinclusive.png" alt="All Inclusive Talk" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://nfdr.no/annet-internasjonale-drammen-aktuelt/" target="_blank"><img src="img/logos/int_dram.jpg" alt="" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://etablererveiledning.no/" target="_blank"><img src="img/logos/etablererveiledning.png" alt="" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="http://www.nktqfp.no" target="_blank"><img src="img/logos/nktqfp.png" alt="NKTQFP" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://www.nordicchoicehotels.no/hotell/norge/drammen/comfort-hotel-union-brygge/?gclid=Cj0KCQjw37fZBRD3ARIsAJihSr3l1t9G6sH7FO35gTdfXQaN_FdA3OmOVDBvs6Szp1H1QrhZ8uEpgccaAgleEALw_wcB" target="_blank"><img src="img/logos/unionbrygge.png" alt="Comfort Hotell Union Brygge" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="http://www.charge.no" target="_blank"><img src="img/logos/charge.png" alt="Charge" width="100%"></a>
        </div>
    </div>
    <div class="w3-content text-align-right w3-padding-16 w3-container">
        <a href="partnere.php" class="black-button w3-card">
            Alle våre kunder og partnere
        </a>
    </div>

    <?php include_once 'templates/footer.php'; ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/navbar.js" charset="utf-8"></script>
    <script src="js/detectIphone.js" charset="utf-8"></script>
    <script src="js/slideshow.js" charset="utf-8"></script>
    <script src="js/acceptTracking.js" charset="utf-8"></script>
</body>

</html>
