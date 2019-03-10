<!DOCTYPE html>
<html>

<head>
    <title>Students and pupils | InMarket Norge</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>
    <div class="w3-display-container margin-top-100" id="hjem">
        <div class="bgimg-glade-flip-dark parallax-img" style="height: calc(100vh - 100px);">
            <div class="w3-display-middle w3-xxlarge white-text margin-top-100 width-100 w3-content w3-container">
                <p>Build your competence and gain experience so you can increase your chances of getting into work.</p>
            </div>
            <div class="w3-display-bottommiddle width-100 white-bg w3-card">
                <div class="w3-row width-100 mobile-large">
                    <div class="w3-col s6 hover-shadow-inset golden-button black-text open-info-box" id="plasser-button">
                        Highschool students
                    </div>
                    <div class="w3-col s6 hover-shadow-inset golden-button black-text open-info-box" id="stillinger-button">
                        University students
                    </div>
                </div>

                <div class="w3-content mobile-medium" id="plasser" style="display:none;">
                    <article class="w3-container w3-section w3-row">
                        <!-- <div class="w3-col m3">
                            <?php // TEMP: bruker her ?>
                        </div>
                        <div class="w3-col m9">
                        </div> -->
                        <div class="w3-center">
                            <p>Create a profile to document your activities in the workplace.​</p>
                            <p>​InMarket wants to work closely with your school, so that we all can help you have the best career start.</p>
                            <div>
                                <a href="forhandsregistrering.php" class="black-button w3-card" style="white-space:normal;margin:1px;" onclick="studentClient();">Pre-register​</a>
                            </div>
                           <!-- <a href="kontakt.php" class="black-button w3-card" style="white-space:normal;" onclick="elevSelected()">SØK PÅ ÅPNE PROSJEKTPLASSER I DITT OMRÅDE</a>-->
                        </div>
                    </article>
                </div>

                <div class="w3-content mobile-medium" id="stillinger" style="display:none;">
                    <article class="w3-container w3-section w3-row">
                        <!-- <div class="w3-col m3">
                            <?php // TEMP: bruker her ?>
                        </div>
                        <div class="w3-col m9">
                        </div> -->
                        <div class="w3-center">
                            <p>Create a profile to document your activities in the workplace.​</p>
                            <p>We want to help you develop the characteristics that can make you shine! With us, you can build experiences and competence that are relevant for your studies and career. ​</p>
                            <div>
                                <a href="forhandsregistrering.php" class="black-button w3-card" style="white-space:normal;margin:1px;" onclick="elevClient();">Pre-register​</a>
                            </div>
                            <!--<a href="kontakt.php" class="black-button w3-card" style="white-space:normal;" onclick="studentClient();">SØK PÅ ÅPNE PROSJEKTPLASSER I DITT OMRÅDE</a>-->
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="w3-card" style="max-width:870px;margin:auto; margin-bottom:40px;">
        <div class="w3-padding-32 w3-container w3-center w3-xlarge" style="padding-left:25px;">
            <div class="w3-left w3-mobile" style="width:225px; padding-top:30px;">
                <img src="img/fig/arbeidssokere.png" alt="Figure" style="width:75%;">
                <p>Students</p>
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
                        <p>Activities</p>
                        <p>Projects</p>
                        <p>Vacancies</p>
                        <p>workshops and</p><p> courses</p>
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
                        <img src="img/fig/ledelse.jpg" alt="Figure" style="" class="width-25-percent">
                        <p>Workplaces</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="w3-row w3-xlarge w3-content w3-padding-32">
        <div class="w3-col m2">
            <img src="img/elever/anniken-square.jpg" alt="" style="width:100%;">
        </div>
        <div class="w3-col m10 w3-container mobile-medium text-align-right">
            <p class="quote">“InMarket has let me work on relevant and fun projects alongside school. I have a better understanding of what we're learning and feel taken care of.</p>
            <p class="quote-source">Anniken, student 2. grade Akademiet VGS</p>
        </div>
    </div>

    <script type="text/javascript">
        $(".open-info-box").on("click", function (e) {
            e.stopPropagation();
            $(".shadow-inset").removeClass("shadow-inset");
            $(this).toggleClass("shadow-inset");
            if ($(this).attr("id") == "plasser-button") {
                if ($("#plasser").css("display") == "none") {
                    $("#stillinger").slideUp();
                    $("#plasser").slideDown();
                } else {
                    closeInfobox();
                }
            } else if ($(this).attr("id") == "stillinger-button") {
                if ($("#stillinger").css("display") == "none") {
                    $("#plasser").slideUp();
                    $("#stillinger").slideDown();
                } else {
                    closeInfobox();
                }
            }
        });

        $(".bgimg-glade-flip").on("click", function () {
            closeInfobox();
        });

        function closeInfobox() {
            $(".shadow-inset").removeClass("shadow-inset");
            $("#stillinger").slideUp();
            $("#plasser").slideUp();
        }
    </script>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <script src="js/clientType.js" charset="utf-8"></script>
</body>

</html>
