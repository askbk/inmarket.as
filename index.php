<!DOCTYPE html>
<html>

<head>
    <title>Inmarket - viser veien videre</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body itemscope itemtype="http://schema.org/Organization">
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>

    <!-- Slideshow-->
    <div class="slideshow w3-display-container margin-top-100 white-text" id="hjem">
        <div class="bgimg-christian-kamera parallax-img mySlides" style=""></div>
    </div>

    <div class="w3-row width-100 mobile-large slideshow-buttons">
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
            <a href="https://www.allinclusivetalk.com/" target="_blank"><img src="img/logos/allinclusive.png" alt="All Inclusive Talk" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://nfdr.no/annet-internasjonale-drammen-aktuelt/" target="_blank"><img src="img/logos/int_dram.jpg" alt="" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://etablererveiledning.no/" target="_blank"><img src="img/logos/etablererveiledning.png" alt="" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="https://www.nordicchoicehotels.no/hotell/norge/drammen/comfort-hotel-union-brygge/?gclid=Cj0KCQjw37fZBRD3ARIsAJihSr3l1t9G6sH7FO35gTdfXQaN_FdA3OmOVDBvs6Szp1H1QrhZ8uEpgccaAgleEALw_wcB" target="_blank"><img src="img/logos/unionbrygge.png" alt="Comfort Hotell Union Brygge" width="100%"></a>
        </div>
        <div class="partner-slide" itemprop="sponsor">
            <a href="http://www.charge.no" target="_blank"><img src="img/logos/charge.png" alt="Charge" width="100%"></a>
        </div>
    </div>

    <div class = "w3-padding-64" style=""></div>



    <div class="w3-container w3-center mobile-medium">
        <h2>Hvordan det funker</h2>
        <p class="w3-content">InMarket er en brukerstyrt plattform som ved hjelp av automatiserte systemer kobler arbeidsplasser med relevante kandidater.</p>
    </div>

    <div class="w3-center" style="max-width:1172px;margin:auto;">
        <div  class="w3-padding-64 w3-container w3-center w3-large">
            <div class="w3-left w3-mobile" style="width:180px;">
                <img src="img/fig/business1.png" alt="Figure" style="" class="width-25-percent">
                <p>InMarket møter, informerer og rekrutterer bedrifter og organisasjoner inn i systemet. </p>
            </div>

            <div class="w3-left w3-mobile testt">
                <div class="w3-row">
                    <div class="w3-col m2 w3-hide-small">
                        <object type="image/svg+xml" data="img/fig/arrow-right.svg" class="w3-left" style="width:100%"></object>
                    </div>
                    <div class="w3-col m3 w3-hide-medium w3-hide-large">
                        <object type="image/svg+xml" data="img/fig/arrow-down.svg" class="" style="width:90px"></object>
                    </div>
                    <div class="w3-col m9">
                        <img src="img/fig/school2.png" alt="Figure" class="width-25-percent">
                        <p>InMarket møter informerer og rekrutterer elever, studenter og jobbsøkere inn i systemet.</p>
                    </div>
                </div>
            </div>

            <div class="w3-left w3-mobile testt">
                <div class="w3-row">
                    <div class="w3-col m2 w3-hide-small">
                        <object type="image/svg+xml" data="img/fig/arrow-right.svg" class="w3-left" style="width:100%"></object>
                    </div>
                    <div class="w3-col m3 w3-hide-medium w3-hide-large">
                        <object type="image/svg+xml" data="img/fig/arrow-down.svg" class="" style="width:90px"></object>
                    </div>
                    <div class="w3-col m9">
                        <img src="img/fig/user3.png" alt="Figure" class="width-25-percent">
                        <p>Bedrifter og organisasjoner oppnår kontakt og kommuniserer med brukerne i systemet.</p>
                    </div>
                </div>
            </div>

            <div class="w3-left w3-mobile testt">
                <div class="w3-row">
                    <div class="w3-col m2 w3-hide-small">
                        <object type="image/svg+xml" data="img/fig/arrow-right.svg" class="w3-left" style="width:100%"></object>
                    </div>
                    <div class="w3-col m3 w3-hide-medium w3-hide-large">
                        <object type="image/svg+xml" data="img/fig/arrow-down.svg" class="" style="width:90px"></object>
                    </div>
                    <div class="w3-col m9">
                        <img src="img/fig/business4.png" alt="Figure" class="width-25-percent">
                        <p>Partene møtes for å utveksle erfaringer, kunnskap og kompetanse.</p>
                    </div>
                </div>
            </div>

            <div class="w3-left w3-mobile testt">
                <div class="w3-row">
                    <div class="w3-col m2 w3-hide-small">
                        <object type="image/svg+xml" data="img/fig/arrow-right.svg" class="w3-left" style="width:100%"></object>
                    </div>
                    <div class="w3-col m3 w3-hide-medium w3-hide-large">
                        <object type="image/svg+xml" data="img/fig/arrow-down.svg" class="" style="width:90px"></object>
                    </div>
                    <div class="w3-col m9">
                        <img src="img/fig/rating5.png" alt="Figure" class="width-25-percent">
                        <p>Etter møtene kan man gi hverandre faglig og mellommenneskelig vurdering.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-content w3-center w3-padding-16 w3-container w3-xlarge">
        <a href="forhandsregistrering.php" class="black-button w3-card">
            Forhåndsregistrer
        </a>
    </div>

    <div class = "w3-padding-64" style=""></div>

    <div class="w3-content w3-center w3-padding-16">
        <h2>Nøkkeltall for InMarket</h2>
    </div>

    <div class="w3-content w3-center w3-padding-16 w3-container w3-xlarge">
        <div class="outerdot">
            <div class="dot"> <span class="golden-text">25</span></div>
            <p>BEDRIFTER</p>
        </div>
        <div class="outerdot">
            <div class="dot"> <span class="golden-text">35</span></div>
            <p>ELEVER</p>
        </div>
        <div class="outerdot">
            <div class="dot"> <span class="golden-text">90</span></div>
            <p>STUDENTER</p>
        </div>
        <div class="outerdot">
            <div class="dot"> <span class="golden-text">100</span></div>
            <p>JOBBSØKERE</p>
        </div>
    </div>

    <?php include_once 'templates/footer.php'; ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- <script src="js/slideshow.js" charset="utf-8"></script> -->
</body>
</html>
