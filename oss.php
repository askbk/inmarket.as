<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once "head.php"?>
        <title>Om Oss - InMarket</title>
    </head>
    <body>
        <?php 
        include_once 'nav.php';
        include_once 'cookie_notice.php';
        ?>

        <div class="container-fluid page4">

            <div class="row r1">
                <div class="col">
                    <p data-aos="zoom-in-up"  data-aos-duration="1200">
                        Vi er et ungt selskap som i samarbeid med private og offentlige 
                        aktører har funnet den beste oppskriften på karrierebygging for 
                        ungdommer.
                    </p>
                    <img src="oss/css/img-mp4/point.jpeg" alt="May og Estella">
                </div>
            </div>

            <div class="row r2">
                <div class="col" id="omIm">
                    <h1 data-aos="zoom-in-up"  data-aos-duration="1000">Vi bygger for fremtiden</h1>
                    <p data-aos="zoom-in-up"  data-aos-duration="1000">
                        InMarket ønsker å se unge mennesker vokse med trygghet på hva de ønsker å bli, hvem de 
                        ønsker å være og hva de ønsker å oppnå. <br><br>

                        Vi har testet ut et konsept som skal øke trivsel, 
                        trygghet og kunnskap om fremtiden.
                    </p>

                    <button class="but butb" onclick="merTest(x)">Les mer</button>
                </div>
            </div>

            <div class="row r3">
                <div class="col">
                    <h1>Teamet</h1>
                    <div class="block">
                        <img src="oss/css/img-mp4/sam.jpg" alt="CEO-Founder">
                        <h2>Samuel Bigirimana - Daglig leder</h2>
                    </div>

                    <div class="block">
                        <img src="oss/css/img-mp4/øy.jpg" alt="Co-Founder">
                        <h2>Øyvind Fjeld - Driftsleder</h2>
                    </div>

                    <div class="block">
                        <img src="oss/css/img-mp4/ask.jpg" alt="CTO">
                        <h2>Ask Kolltveit - IT</h2>
                    </div>

                    <div class="block">
                        <img src="oss/css/img-mp4/izzy.jpg" alt="PR">
                        <h2>Izraelli Boneza - PR</h2>
                    </div>

                    <div class="block">
                        <img src="oss/css/img-mp4/chris.jpg" alt="Sales">
                        <h2>Christian Hellumsand - Salg</h2>
                    </div>
                      
                </div>
            </div>

        </div>

        <?php 
        include_once 'footer.php';
        include_once 'script.php';
        ?>
        
    </body>
</html>