<!DOCTYPE html>
<html>

<head>
    <title>Studenter og elever | InMarket Norge</title>
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
            <div class="height-100 w3-large w3-padding white-bg width-500 sliding-text-left" id="student-text">
                <span class="small-x w3-right w3-xlarge" id="close-student">&times</span>
                <p>InMarket ønsker å samarbeide med din utdanningsplass for at du skal få den beste muligheten til å forberede deg til arbeidslivet.​</p>
                <p>Med oss kan du utvikle de egenskapene som får deg til å blomstre. Vi hjelper deg med å bygge erfaringer og kompetanse som er relevant for studier og karriere.​</p>
                <p>Vi tilbyr frivillige stillinger som praktikanter i bedrifter, eller lønnede trainee stillinger. Arbeidstiden vil varier mellom 5 arbeidstimer i uken til 22 arbeidstimer i uken.​</p>
                <div class="w3-center">
                    <a href="#" class="black-button w3-card" style="white-space:normal;">SØK PÅ ÅPNE PROSJEKTPLASSER</a>
                </div>
            </div>
        </div>
        <div class="w3-col m6 mobile-height-100 w3-display-container z-index-2 overflow-hidden">
            <div class="height-100 w3-large w3-padding white-bg width-500 sliding-text-right" id="pupil-text">
                <span class="small-x w3-right w3-xlarge" id="close-pupil">&times</span>
                <p>Vi holder oss tett koblet til utdanningsplassen din slik at du ikke behøver å bortprioritere dine studier. Ved å gjøre noe som aktivt kan kobles til studie ditt, vil du stå sterk til å velge veien din videre.​</p>
                <p>Som elev kan du kobles til høyere studier som kan være av interesse å få informasjon om tjenester og verv, erfaring i relevant virksomhet med mer.</p>
                <p>Vi kommuniserer med skolen din slik at du kan få faste tidspunkter i uken eller i måneden sammen med oss og våre samarbeidspartnere.​</p>
                <div class="w3-center">
                    <a href="#" class="black-button w3-card" style="white-space:normal;">SØK PÅ ÅPNE PROSJEKTPLASSER</a>
                </div>
            </div>
            <div class="bgimg-glade-pt2 z-index-2 cursor-pointer w3-hover-grayscale">
                <h1 class="w3-display-topmiddle w3-padding-32 white-text w3-jumbo uppercase w3-padding text-shadow">
                    Studenter
                </h1>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

    <script type="text/javascript">
        let glade1 = $(".bgimg-glade-pt1"),
            glade2 = $(".bgimg-glade-pt2"),
            pupilText = $("#pupil-text"),
            studentText = $("#student-text");


        glade2.on("click", function () {
            closePupil();
            openStudent();
        });

        glade1.on("click", function () {
            closeStudent();
            openPupil();
        });

        $("#close-student").on("click", function () {
            closeStudent();
        });

        $("#close-pupil").on("click", function () {
            closePupil();
        });

        function openStudent() {
            studentText.addClass("z-index-2 student-open");
            glade2.addClass("student-open");
            // $(".bgimg-glade-pt1").addClass("translateX-n500");
            TweenMax.to(studentText, 0.5, {right: 0, opacity:1})
            TweenMax.to(glade1, 0.5, {x:-500});
            // glade2.addClass("w3-grayscale-max");
            // glade1.removeClass("w3-grayscale-max");

            // $('html, body').animate({
            //     scrollTop: $("#student-text").offset().top - 100
            // }, 1000);
        }

        function openPupil() {
            pupilText.addClass(" z-index-1 pupil-open");
            glade1.addClass("pupil-open");
            // $(".bgimg-glade-pt2").addClass("translateX-500");
            TweenMax.to(pupilText, 0.5, {left: 0, opacity:1})
            TweenMax.to(glade2, 0.5, {x:500});
            // glade1.addClass("w3-grayscale-max");
            // glade2.removeClass("w3-grayscale-max");

            // $('html, body').animate({
            //     scrollTop: $("#pupil-text").offset().top - 100
            // }, 1000);
        }

        function closeStudent() {
            if (studentText.hasClass("student-open")) {
                glade2.removeClass("student-open");
                studentText.removeClass("z-index-2 studentTex student-opent").addClass("z-index-1");
                // $(".bgimg-glade-pt1").removeClass("translateX-n500");
                TweenMax.to(studentText, 0.5, {right: -500, opacity:0});
                TweenMax.to(glade1, 0.5, {x: 0});
                // glade2.removeClass("w3-grayscale-max");
            }
        }

        function closePupil() {
            if (pupilText.hasClass("pupil-open")) {
                glade1.removeClass("pupil-open");
                pupilText.removeClass("z-index-1 pupil-open");
                // $(".bgimg-glade-pt2").removeClass("translateX-500");
                TweenMax.to(glade2, 0.5, {x:0});
                TweenMax.to(pupilText, 0.1, {left: -500, opacity:0});
                // glade1.removeClass("w3-grayscale-max");
            }
        }

    </script>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <script src="js/detectIphone.js" charset="utf-8"></script>
    <script async src="js/navbar.js" charset="utf-8"></script>
    <script src="js/acceptTracking.js" charset="utf-8"></script>
</body>

</html>
