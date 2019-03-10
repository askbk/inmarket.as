<!DOCTYPE html>
<html>

<head>
    <title>Åpne plasser og ledige stillinger | Inmarket</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>

    <div class="w3-display-container margin-top-100" id="hjem">
        <div class="comfort-hotel-bg parallax-img" style="height: calc(100vh - 100px);">
            <div class="w3-display-bottommiddle width-100 white-bg w3-card">
                <div class="w3-row width-100 mobile-large">
                    <div class="w3-col m6 hover-shadow-inset golden-button black-text open-info-box" id="plasser-button">
                        Åpne plasser
                    </div>
                    <div class="w3-col m6 hover-shadow-inset golden-button black-text open-info-box" id="stillinger-button">
                        Ledige stillinger
                    </div>
                </div>

                <div class="w3-center w3-content w3-large" id="plasser" style="display:none;">
                    <ul class="remove-list-things" style="">
                        <li class="listing hover-shadow-inset w3-container">
                            <div class="w3-xlarge cursor-pointer">
                                <span class=""><span class="bold-text">NKTQFP AS</span>  - for elever</span>
                                <br>
                                (3 plasser)
                            </div>
                            <div class="open-text" style="display:none;">
                                <p class="margin-0">Ønsker deg som er elev og ønsker å utvikle deg innen robotikk, programmering eller økonomi. Dette gjør du én gang i måneden med veiledning og oppfølging fra InMarket.</p>
                                <a href="kontakt.php" class="black-button w3-card bold-text w3-margin">Søk her</a>
                            </div>
                        </li>

                        <li class="listing hover-shadow-inset w3-container">
                            <div class="w3-xlarge cursor-pointer">
                                <span class=""><span class="bold-text">NRK Buskerud</span>  - for elever</span>
                                <br>
                                (2 plasser)
                            </div>
                            <div class="open-text" style="display:none;">
                                <p class="margin-0">Ønsker deg som er elev og ønsker å utvikle deg innen media etc. Dette gjør du én gang i måneden med veiledning og oppfølging fra InMarket.</p>
                                <a href="kontakt.php" class="black-button w3-card bold-text w3-margin">Søk her</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="w3-center w3-content w3-large" id="stillinger" style="display:none;">
                    <ul class="remove-list-things" style="">
                        <li class="listing w3-container">
                            <h2>Hello!</h2>
                            <p>InMarket har foreløpig ingen ledige stillinger. Vi jobber med å skaffe oss flere samarbeidspartnere slik at du kan oppleve arbeidslivet.​</p>
                            <p>Du kan fortsatt kontakte oss og fortelle oss litt om deg selv og hva du ønsker. På denne måten vet vi litt bedre hvilke arbeidsplass vi skal se etter.​</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
                $(this).addClass("open shadow-inset golden-bg");
            }
        });

        function closeListings() {
            $(".listing").removeClass("golden-bg shadow-inset open");
            $(".open-text").slideUp();
        }
    </script>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
</body>

</html>
