<!DOCTYPE html>
<html>

<head>
    <title>Bli med! | InMarket Norge</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>

    <div class="w3-content w3-padding margin-top-100">
        <article class="w3-section">
            <div class="w3-row">
                <div class="w3-col m2 w3-padding">
                    <img src="img/fig/ledelse.jpg" alt="" width="100%" class="w3-margin-top w3-opacity">
                </div>
                <div class="w3-col m10">
                    <h2>Ledelsen</h2>
                    <p>Som leder i InMarket Norge får du ansvar for din egen avdeling. Her har du gode arbeidsvilkår, gode muligheter til å utvikle din kompetanse og kommunikasjonslinje rett opp til styret. Du vil kunne veilede, organisere og følge opp ditt eget team, og du er med på å forme InMarkets mål og arbeidsprosess.</p>
                </div>
            </div>

            <div class="w3-row">
                <div class="w3-col m2 w3-padding">
                    <img src="img/fig/ansatt.png" alt="" width="100%" class="w3-margin-top w3-opacity">
                </div>
                <div class="w3-col m10">
                    <h2>Ansatt</h2>
                    <p>Som ansatt i InMarket vil du kunne bruke fagkompetanse din til å løse spesifikke oppgaver i vår drift. Vi ser først og fremst etter deg med forståelse og innblikk i elevenes og studentenes hverdag. Her vil alt man gjør kunne knyttes til vår visjon om å styrke det norske arbeidsmarkedet i internasjonal sammenheng.</p>
                </div>
            </div>

            <div class="w3-row">
                <div class="w3-col m2 w3-padding">
                    <img src="img/fig/frivillig.svg" alt="" class="w3-margin-top w3-opacity" width="100%">
                </div>
                <div class="w3-col m10">
                    <h2>Frivillig</h2>
                    <p>Som frivillig ansatt eller verver vil du ha store muligheter til å utvikle deg og gjøre deg til en attraktiv arbeidstaker. InMarket har stort fokus på personlig utvikling, og du vil være først i linjen når det gjelder kursing, samlinger og arbeidsmuligheter hos oss og våre samarbeidspartnere.</p>
                </div>
            </div>


        </article>

        <div class="w3-row">
            <article class="w3-col m5 golden-bg black-text w3-card w3-container">
                <h2>Trainee</h2>
                <p>Som trainee blir du ansatt av InMarket med en kontrakt som varer mellom 8 og 14 måneder. Her kan du få tilbud om lønn hvis du har vært frivillig i InMarket tidligere.</p>
                <p>Våre traineer får prøve seg hos 3-5 bedrifter i 1-3 måneder i hver bedrift under trainee perioden. Bedriftene får muligheten til å tilby deg kontrakt og løsrive deg fra InMarket sin kontrakt. Her kan du som et ungt talent velge hvor du ønsker å jobbe ettersom du får muligheten til å vise din evne og vilje til potensielle arbeidsgivere.</p>
                <p class="w3-right" ><a href="#blimed"><b>Søk om traineeplass</b></a></p>
            </article>
            <div class="w3-col m7">
                <div class="bgimg-5 height-27em" style="">
                </div>
            </div>
        </div>
    </div>

    <div class="w3-content w3-padding w3-section">
        <h2 id="blimed">Bli med på teamet!</h2>
        <p>Har du lyst til å bli på teamet vårt? Trykk deg inn og se på dine muligheter da vel!</p>
        <em>Ingen ledige stillinger for øyeblikket, prøv igjen senere!</em>
    </div>

    <div class="w3-content w3-padding w3-section">
        <div class="w3-center w3-card" style="height:600px;">
            <div class="w3-row height-100">
                <div class="w3-col m6 comfort-hotel-bg height-100">
                    <div class="w3-display-container height-100">
                        <p id="moving-text" class="w3-jumbo white-text w3-display-position text-shadow" style="top:50%;left:50%;transform:translate(-50%, -50%);width:100%;margin:0;">ÅPNE PLASSER</p>
                    </div>
                </div>
                <div class="w3-col m6 golden-bg w3-center height-100">
                    <div class="w3-display-container height-100">
                        <ul class="remove-list-things w3-display-middle width-100">
                            <li class="trainee-opening">
                                <div class="w3-xlarge closed-state">
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
                                <div class="w3-xlarge closed-state">
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
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
</body>

</html>
