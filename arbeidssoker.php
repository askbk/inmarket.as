<!DOCTYPE html>
<html>

<head>
    <title>Arbeidssøkere | InMarket Norge</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>

    <div class="margin-top-100 bgimg-dressmannsvart full-height parallax-img w3-display-container">
        <div class="w3-display-bottommiddle white-text mobile-large w3-center max-width-1200 width-100 w3-container" style="bottom :40px; line-height:1.2;text-shadow: 1px 1px 2px rgba(0,0,0, 0.3)">
            <p>
                Det er ikke alltid like lett å komme seg ut i arbeidsmarkedet. Noen arbeidsoppgaver blir overtatt av automatiserte roboter, og globaliseringen presser på.​​
            </p>
            <p>
                Med InMarket får du muligheten til å utforske arbeidsmarkedet på nytt. Sammen med våre samarbeidspartnere åpner vi dørene for at du skal ha bedre spillerom.​​
            </p>
            <p>
                Vi hjelper deg å bygge et solid nettverk via våre workshop, jevne bedriftsbesøk, kurs og workshop.​
            </p>
        </div>
    </div>
    <br>
    <br>
    <div class="w3-card" style="max-width:870px;margin:auto;">
        <div class="w3-padding-32 w3-container w3-center mobile-xxlarge" style="padding-left:25px;">
            <div class="w3-left w3-mobile" style="width:225px; padding-top:30px;">
                <img src="img/fig/arbeidssokere.png" alt="Figure" style="width:100%;">
                <p>Jobbsøkere</p>
            </div>


            <div class="w3-left w3-mobile testt" >
                <div class="w3-row">
                    <div class="w3-col m3 w3-hide-small" style="padding-top:30px;">
                        <object type="image/svg+xml" data="img/fig/arrow-right.svg" class="w3-left" style="width:100%"></object>
                    </div>
                    <div class="w3-col m3 w3-hide-medium w3-hide-large">
                        <object type="image/svg+xml" data="img/fig/arrow-down.svg" class="" style="width:90px"></object>
                    </div>
                    <div class="w3-col m9" style = "line-height: 0.5; ">
                        <p>Aktiviteter</p>
                        <p>Prosjekter</p>
                        <p>Ledige stillinger</p>
                        <p>Workshop og kurs</p>
                    </div>
                </div>
            </div>

            <div class="w3-left w3-mobile testt" >
                <div class="w3-row">
                    <div class="w3-col m3 w3-hide-small" style="padding-top:30px;">
                        <object type="image/svg+xml" data="img/fig/arrow-right.svg" class="w3-left" style="width:100%"></object>
                    </div>
                    <div class="w3-col m3 w3-hide-medium w3-hide-large">
                        <object type="image/svg+xml" data="img/fig/arrow-down.svg" class="" style="width:90px"></object>
                    </div>
                    <div class="w3-col m9" style="padding-top:30px;">
                        <img src="img/fig/ledelse.jpg" alt="Figure" style="width:35%;">
                        <p>Arbeidsgivere</p>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="">

        <article class="narrow-content mobile-large w3-container w3-padding-large w3-center">
            <p>Med InMarket kan du søke deg inn hos relevante aktører i ditt nærområde. Her har de lagt ut eller invitert deg, eller så kan du oppsøke dem og sende en forespørsel.</p>
        </article>

        <div class="narrow-content">
            <hr class="w3-container golden-hr">
        </div>

        ​​<article class="narrow-content mobile-large w3-container w3-padding-large w3-center">
            <!-- <div class="w3-half w3-container">

            </div> -->
            <p>Lag deg en profil som kan dokumentere din aktivitet ute i virksomhetene.​ ​</p>
            <p>Vi fyller på med relevante arbeidsplasser og aktiviteter, slik at du får mye å velge mellom. Bygg deg inn i arbeidsmarkedet.</p>
            <!-- <div class="w3-half w3-container ">
            </div> -->
            <!-- <div class="w3-center w3-padding-16">
                <a href="" class="black-button w3-card w3-bar w3-xlarge">FORHÅNDSREGISTRER</a>
            </div> -->
        </article>

        <!--

        <article class="w3-content mobile-medium w3-container w3-padding-large ">

            <p >Det er ikke alltid like lett å komme seg ut i arbeid2smarkedet. Noen arbeidsoppgaver blir overtatt av automatiserte roboter, og globaliseringen presser på.​</p>
            <p>Med InMarket får du muligheten til å utforske arbeidsmarkedet på nytt. Sammen med våre samarbeidspartnere åpner vi dørene for at du skal ha bedre spillerom.​</p>
            <p>Vi hjelper deg å bygge et solid nettverk via våre workshop, jevne bedriftsbesøk, kurs og trainee stillinger.</p>
        </article>

        <div class="golden-bg">
            <div class="w3-row golden-bg bgimg-jenterpeker bg-properties">
                <article class="w3-col m6 w3-container golden-bg mobile-medium w3-padding-large">
                    <h2>Trainee</h2>
                    <p>Som trainee blir du ansatt av InMarket med en kontrakt som varer mellom 8 og 14 måneder. Her kan du få tilbud om lønn.​</p>
                    <p>Du blir dermed utplassert i en virksomhet som igjen får muligheten til å tilby deg kontrakt og løsrive deg fra InMarket sin kontrakt.</p>
                    <p>Her kan du velge hvor du ønsker å jobbe ettersom du får muligheten til å vise din evne og vilje til flere arbeidsgivere.</p>
                </article>
                <div class="w3-col m6 bgimg-jenterpeker height-100 bg-properties w3-hide-medium w3-hide-large" style="height:300px;">

                </div>
            </div>
        </div>-->


        <a href="openings.php" class="black-button w3-card w3-bar w3-xxlarge">LEDIGE STILLINGER</a>
    </div>
    <?php
    $bedrift = false;
    include_once 'templates/workshop.php';
    ?>
    <!--<div class="w3-display-container parallax-img bgimg-allinclusive-2" style="height:300px;">
        <div class="w3-display-bottommiddle text-shadow w3-jumbo white-text">
            WORKSHOP NEXT
        </div>
    </div>

    <article class="w3-content mobile-medium w3-container">
        <p>All Inclusive Talk er etablert av to skuespillere som ønsker å hjelpe deg med å utvikle dine kommunikasjonsevner. Her snakker vi om masse moro, solide verktøy og mye praksis.​</p>
        <p>Snakk med din arbeidsgiver og be dem ta kontakt med oss angående påmelding.</p>
    </article>-->

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <script src="js/detectIphone.js" charset="utf-8"></script>
    <script async src="js/navbar.js" charset="utf-8"></script>
    <script src="js/acceptTracking.js" charset="utf-8"></script>
</body>

</html>
