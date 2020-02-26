<!DOCTYPE html>
<html lang="en">
    <head>
        <title>InMarket - Viser Prisene </title>

        <?php include_once ("head.php") ?>
    </head>

    <body>
        <?php 
        include_once 'nav.php';
        include_once 'cookie_notice.php';
        ?>

            <div class="container-fluid page8">
                <div class="row r1">
                    <div class="col">

                        <div class="price1">
                            <h1>Standard Bedrift <br>
                            349,-</h1> <br><br>

                            <p>
                                <b>Inkluderer:</b><br><br>
                                Profil med bedriftsoversikt <br>
                                Disponering av egne ansatte <br>
                                Matching med elever <br>
                                Kommunikasjonsverktøy <br>
                                Planleggingsverktøy
                            </p> <br><br>

                            <a href="https://app.inmarket.as/#!/registrering" target="_blank"><button class="but butw">Registrer</button></a>
                        </div>

                        <div class="price2">
                            <h1>Standard skole <br>
                            1490,-</h1><br><br>

                            <p>
                                <b>Inkluderer:</b><br><br>
                                Profil med bedriftsoversikt <br>
                                Disponering av egne ansatte <br>
                                Matching med bedrifter <br>
                                Kommunikasjonsverktøy <br>
                                Planleggingsverktøy <br>
                                Oppfølging av egne elever
                            </p> <br><br>
                            <a href="https://app.inmarket.as/#!/registrering" target="_blank"><button class="but butb">Registrer</button></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        <?php 
        include_once 'footer.php';
        include_once 'script.php';
        ?>

        </div>
        <script src="hele-nettsiden/js/pris.js" chartset="utf-8"></script> 
    </body>
</html>