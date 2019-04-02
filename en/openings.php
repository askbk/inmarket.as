<!DOCTYPE html>
<html>

<head>
    <title>Vacancies and available projects | InMarket</title>
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
                        Open spots
                    </div>
                    <div class="w3-col m6 hover-shadow-inset golden-button black-text open-info-box" id="stillinger-button">
                        Available projects
                    </div>
                </div>

                <div class="w3-center w3-content w3-large" id="plasser" style="display:none;">
                    <ul class="remove-list-things" style="">
                        <li class="listing hover-shadow-inset w3-container">
                            <div class="w3-xlarge cursor-pointer">
                                <span class=""><span class="bold-text">NRK Buskerud</span>  - for pupils</span>
                                <br>
                                (2 open spots)
                            </div>
                            <div class="open-text" style="display:none;">
                                <p class="margin-0">Seeking students who want to develop within media, journalism etc. You do this once a month with guidance and follow-up from InMarket.</p>
                                <a href="kontakt.php" class="black-button w3-card bold-text w3-margin">Apply here</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="w3-center w3-content w3-large" id="stillinger" style="display:none;">
                    <ul class="remove-list-things" style="">
                        <li class="listing w3-container">
                            <h2>Hello!</h2>
                            <p>There are no available positions to right now. We are working towards finding more companies to collaborate with so that you can experience a bigger variety of work environments.​</p>
                            <p>You can still contact us and tell us a little bit about yourself and your desired industry. This allows us to have a better understanding of what sort of partners we should be looking for.​</p>
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
