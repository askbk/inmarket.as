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

    <div class="w3-row">
        <div class="slideshow w3-display-container margin-top-100 white-text w3-col m7" id="hjem">
            <div class="bgimg-christian-kamera parallax-img mySlides" style=""></div>
        </div>
        <div class="w3-col m5 w3-container">
            <div class="">
                <h3>Bli koblet til jobben du drømmer om.</h3>
                <p>
                    <a href="#" class="black-button w3-card">Lag gratis bruker nå</a>
                </p>
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

    <?php include_once 'templates/footer.php'; ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/slideshow.js" charset="utf-8"></script>
</body>
</html>
