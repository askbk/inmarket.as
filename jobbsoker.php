<!DOCTYPE html>
<html>

<head>
    <title>Jobbsøker | InMarket</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>

    <div class="margin-top-100 mobile-no-flex full-height-custom" style="align-items: center;background-image: url('img/jobseeker.jpg');background-size: cover;background-repeat: no-repeat;background-position-y: center;background-position-x: 600px; ">
        <div class="gray-text w3-mobile w3-container w3-center white-bg w3-xlarge" style="flex-basis:600px;">
            <div>
                <img src="img/fig/brain.png" alt="" style="width:20%;" class="">
                <p class="small-margin">Fortell om din nøkkelkompetanse, interesse og motivasjon.</p>
            </div>
            <div class="w3-padding-32">
                <img src="img/fig/network.png" alt="" style="width:20%;" class="">
                <p  class="small-margin">Kom i kontakt med bedrifter via vårt automatiserte matching-system.</p>
            </div>
            <div class="">
                <img src="img/fig/deal.png" alt="" style="width:20%;" class="">
                <p  class="small-margin">Møt bedrifter og bygg din karriere.</p>
            </div>
            <div class="w3-padding-32">
                <a href="forhandsregistrering.php" class="black-button w3-card w3-round">Lag gratis bruker</a>
            </div>
        </div>
    </div>
    <?php include_once 'templates/scripts.php'; ?>
</body>

</html>
