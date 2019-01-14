<!DOCTYPE html>
<html>

<head>
    <title>Åpne plasser og ledige stillinger | InMarket Norge</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>

    <div class="margin-top-100 mobile-full-height w3-row" style="">
        <div class="w3-col m6 mobile-height-100 w3-display-container">
            <div class="bgimg-glade-pt1 z-index-2 cursor-pointer w3-hover-grayscale">
                <h1 class="w3-display-bottommiddle w3-padding-32 white-text w3-jumbo uppercase w3-padding text-shadow">
                    Elever
                </h1>
            </div>
            <div class="height-100 w3-large w3-padding golden-bg width-500 sliding-text-right w3-center" id="student-text">
                <div class="w3-display-container height-100">
                    <span class="small-x w3-right w3-xxlarge" id="close-student">&times</span>
                    <!-- <ul class="remove-list-things w3-display-middle width-100">
                        <li class="trainee-opening">
                            <div class="w3-xlarge closed-state hover-shadow-inset cursor-pointer">
                                <span class=""><span class="bold-text">NKTQFP AS</span>  - for elever</span>
                                <br>
                                (3 plasser)
                            </div>
                            <div class="white-bg w3-card" style="display:none;">
                                <span class="w3-xxlarge w3-right close-openings">&times</span>
                                <h3>NKTQFP AS - for elever</h3>
                                <p>Ønsker deg som er elev og ønsker å utvikle deg innen robotikk, programmering eller økonomi.</p>
                                <p>Dette gjør du én gang i måneden med veiledning og oppfølging fra InMarket.</p>
                                <a href="kontakt.php" class="black-button w3-card">Søk her</a>
                            </div>
                        </li>

                        <li class="trainee-opening">
                            <div class="w3-xlarge closed-state hover-shadow-inset cursor-pointer">
                                <span class=""><span class="bold-text">NRK Buskerud</span>  - for elever</span>
                                <br>
                                (2 plasser)
                            </div>
                            <div class="white-bg w3-card" style="display:none;">
                                <span class="w3-xxlarge w3-right close-openings">&times</span>
                                <h3>NRK Buskerud - for elever</h3>
                                <p>Ønsker deg som er elev og ønsker å utvikle deg innen media etc.</p>
                                <p>Dette gjør du én gang i måneden med veiledning og oppfølging fra InMarket.</p>
                                <a href="kontakt.php" class="black-button w3-card">Søk her</a>
                            </div>
                        </li>
                    </ul> -->
                    <div class="w3-display-middle width-100">
                        <h2>Hello!</h2>
                        <p>InMarket har foreløpig ingen ledige stillinger. Vi jobber med å skaffe oss flere samarbeidspartnere slik at du kan oppleve arbeidslivet.​</p>
                        <p>Du kan fortsatt kontakte oss og fortelle oss litt om deg selv og hva du ønsker. På denne måten vet vi litt bedre hvilke arbeidsplass vi skal se etter.​</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="w3-col m6 mobile-height-100 w3-display-container z-index-2 overflow-hidden">
            <div class="height-100 w3-large w3-padding golden-bg width-500 sliding-text-left w3-center" id="pupil-text">
                <div class="w3-display-container height-100">
                    <span class="small-x w3-right w3-xxlarge" id="close-pupil">&times</span>
                    <ul class="remove-list-things w3-display-middle width-100">
                        <li class="trainee-opening">
                            <div class="w3-xlarge closed-state hover-shadow-inset cursor-pointer">
                                <span class=""><span class="bold-text">NKTQFP AS</span>  - for elever</span>
                                <br>
                                (3 plasser)
                            </div>
                            <div class="white-bg w3-card" style="display:none;">
                                <span class="w3-xxlarge w3-right close-openings">&times</span>
                                <h3>NKTQFP AS - for elever</h3>
                                <p>Ønsker deg som er elev og ønsker å utvikle deg innen robotikk, programmering eller økonomi.</p>
                                <p>Dette gjør du én gang i måneden med veiledning og oppfølging fra InMarket.</p>
                                <a href="kontakt.php" class="black-button w3-card width-100">Søk her</a>
                            </div>
                        </li>

                        <li class="trainee-opening">
                            <div class="w3-xlarge closed-state hover-shadow-inset cursor-pointer">
                                <span class=""><span class="bold-text">NRK Buskerud</span>  - for elever</span>
                                <br>
                                (2 plasser)
                            </div>
                            <div class="white-bg w3-card" style="display:none;">
                                <span class="w3-xxlarge w3-right close-openings">&times</span>
                                <h3>NRK Buskerud - for elever</h3>
                                <p>Ønsker deg som er elev og ønsker å utvikle deg innen media etc.</p>
                                <p>Dette gjør du én gang i måneden med veiledning og oppfølging fra InMarket.</p>
                                <a href="kontakt.php" class="black-button w3-card width-100">Søk her</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bgimg-glade-pt2 z-index-2 cursor-pointer w3-hover-grayscale">
                <h1 class="w3-display-topmiddle w3-padding-32 white-text w3-jumbo uppercase w3-padding text-shadow">
                    Studenter
                </h1>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let glade1 = $(".bgimg-glade-pt1"),
            glade2 = $(".bgimg-glade-pt2"),
            pupilText = $("#pupil-text"),
            studentText = $("#student-text");


        $(".bgimg-glade-pt2").on("click", function () {
            closePupil();
            openStudent();
            console.log("student click");
        });

        $(".bgimg-glade-pt1").on("click", function () {
            closeStudent();
            openPupil();
            console.log("pupil click");
        });

        $("#close-student").on("click", function () {
            closeStudent();
            console.log("student x click");
        });

        $("#close-pupil").on("click", function () {
            closePupil();
            console.log("pupil x click");
        });

        function openStudent() {
            studentText.addClass("right-0 z-index-2");
            $(".bgimg-glade-pt1").addClass("translateX-n500");
            glade2.addClass("w3-grayscale-max");
            glade1.removeClass("w3-grayscale-max");

            $('html, body').animate({
                scrollTop: $("#student-text").offset().top - 100
            }, 1000);
        }

        function openPupil() {
            pupilText.addClass("left-0 z-index-1");
            $(".bgimg-glade-pt2").addClass("translateX-500");
            glade1.addClass("w3-grayscale-max");
            glade2.removeClass("w3-grayscale-max");

            $('html, body').animate({
                scrollTop: $("#pupil-text").offset().top - 100
            }, 1000);
        }

        function closeStudent() {
            studentText.removeClass("right-0 z-index-2").addClass("z-index-1");
            $(".bgimg-glade-pt1").removeClass("translateX-n500");
            glade2.removeClass("w3-grayscale-max");
        }

        function closePupil() {
            pupilText.removeClass("left-0 z-index-1");
            $(".bgimg-glade-pt2").removeClass("translateX-500");
            glade1.removeClass("w3-grayscale-max");
        }

        $(".closed-state").click(function () {
            closeAll(this);
            $(this).siblings().first().slideDown("fast");
            $(this).slideUp("fast");
        });

        $(".close-openings").click(function () {
            closeAll();
        });

        function closeAll(el) {
            if (el) {
                let p = $(el).parent();
                $(".trainee-opening").each(function (i, e) {
                    if (!$(this).is(p)) {
                        close($(this));
                    }
                });
            } else {
                $(".trainee-opening").children().filter(":even").slideDown();
                $(".trainee-opening").children().filter(":odd").slideUp();
            }
        }

        function close(el) {
            el.children().filter(":even").slideDown();
            el.children().filter(":odd").slideUp();
        }
    </script>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <script src="js/detectIphone.js" charset="utf-8"></script>
    <script async src="js/navbar.js" charset="utf-8"></script>
    <script src="js/acceptTracking.js" charset="utf-8"></script>
</body>

</html>
