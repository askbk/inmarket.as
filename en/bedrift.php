<!DOCTYPE html>
<html>

<head>
    <title>Company | InMarket</title>
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
            <p>With InMarket, you can make an impact in the Norwegian market.</p>
            <p>You have the control and we help you out.​</p>
        </div>
    </div>

    <div class="w3-content w3-xlarge w3-center w3-container">
        <div class="w3-row">
            <!-- TODO: Legge til figurer-->
        </div>
        <div class="narrow-content">
            <p class="w3-xlarge">InMarket let your company invite students and jobseekers. You decide who to invite, and you only connect with the candidates who have relevant competence and interest.</p>
            <hr>
        </div>
        <div class="">
            <p>Do you want to connect with potential workers and help them build relevant competence and experience? You decide the activity, where, date, time and who.​</p>
            <p class="w3-xxlarge"> <strong>WE'RE LAUNCHING SUMMER 2019​</strong> </p>
            <div>
                <a href="forhandsregistrering.php" class="black-button w3-card" style="white-space:normal;margin:1px;" onclick="bedriftClient();">PRE-REGISTER</a>
            </div>
        </div>
        <div class="w3-row w3-row-padding w3-medium w3-padding-64">
            <div class="w3-col m2">
                <img src="img/partners/chris.jpg" alt="" style="width:100%;">
            </div>
            <div class="w3-col m10 w3-container text-align-left">
                <p class="quote">The collaboration between InMarket and NRK-Buskerud have given us a super opportunity to get closer and more familiar with the modern youth. This has given us more insight, new and exciting angels on our cases and ideas we wouldn’t think of ourselves. We ́ve also met some young media talents from which we hired one to be our notice substitute</p>
                <p class="quote-source">Chris Carlsen, district manager <strong>NRK Buskerud</strong></p>
            </div>
        </div>
    </div>

    <div class="w3-center w3-large width-100" id="plasser" style="">
        <ul class="remove-list-things" style=" margin:0;">
            <li class="listing hover-shadow-inset w3-container golden-bg w3-padding" style="margin-top:0;">
                <div class="w3-xlarge cursor-pointer">
                    Students
                </div>
                <div class="open-text" style="display:none;">
                    <p class="w3-content">Du kan velge å ha elever fra videregående skole nivå hos deg. InMarket har kontakt med skolen og lærerne slik at deres erfaring hos deg kan knyttes til det de lærer på skolen.​</p>
                </div>
            </li>
            <!--
            <li class="listing hover-shadow-inset w3-container golden-bg w3-padding" style="margin-top:0;">
                <div class="w3-xlarge cursor-pointer">
                    Studenter
                </div>
                <div class="open-text" style="display:none;">
                    <p class="w3-content">Du kan velge å ha en student som tar sin bachelor eller mastergrad hos deg med jevne mellomrom. Disse har ny og relevant kompetanse.</p>
                </div>
            </li>-->
            <li class="listing hover-shadow-inset w3-container golden-bg w3-padding" style="margin-top:0;">
                <div class="w3-xlarge cursor-pointer">
                    Jobseekers
                </div>
                <div class="open-text" style="display:none;">
                    <p class="w3-content">Noen folk er ute etter å bygge relevant arbeidserfaring, finne gode verktøy og lage seg et godt nettverk. Velger du å ha en arbeidssøker hos deg blir det som å ha en «extended» intervju.​</p>
                </div>
            </li>
        </ul>
        <a href="kontakt.php" class="black-button w3-xlarge width-100 w3-card">
            Contact us
        </a>
    </div>



    <?php
    $bedrift = true;
    include_once 'templates/workshop.php';
    ?>

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
</body>

</html>
