<!DOCTYPE html>
<html>

<head>
    <title>Registrer | Inmarket</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
<?php
include_once 'templates/navigation.php';
include_once 'templates/cookie_notice.php';
?>

<div class="w3-row margin-top-100" style="display:flex;align-items:center;flex-wrap:wrap;justify-content: center;align-items: center;">
    <div class="w3-col l6 w3-card submit-hide" style="background-color:white">
        <a href="forhandsregistrering.php" onclick="bedriftClient();">
            <div class="w3-col m6 l6 s6" style="background-color:black;color:white">
                <p class="w3-content w3-center w3-xlarge w3-padding-16">
                    Bruker
                </p>
            </div>
        </a>
        <div class="w3-col m6 l6 s6" style="background-color:white; color:black">
            <p class="w3-content w3-center w3-xlarge w3-padding-16">
                Bedrift
            </p>
        </div>
        <div class="w3-content w3-center">
            <form class="w3-large w3-container" action="index.php" method="post" id="kontaktSkjema">
                <div class="w3-row">
                    <div id="first-page">
                        <br>
                        <p>
                            Engasjer folk i arbeidet dere gjør og øk samtidig sjansen for å finne de beste ansatte for
                            din bedrift.​
                        </p>

                        <div class=" w3-content w3-center register-container">
                            <p>Fullt navn:</p>
                            <input type="text" name="navn" value="" placeholder="Fornavn og etternavn"
                                   class="w3-input w3-animate-input" required id="inputName">
                            <p>E-post:</p>
                            <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="deg@eksempel.no​" id="inputPlace"
                                   class="w3-input w3-animate-input" required id="inputEpost">
                            <p>Telefon:​</p>
                            <input type="tel" name="telefon" value="" placeholder="+XX XXXXXXXX​"
                                   class="w3-input w3-animate-input" required>
                            <p>Stilling:</p>
                            <input type="text" name="rolle" value="" placeholder="Stilling"
                                   class="w3-input w3-animate-input" required>
                            <p>Kommune:</p>
                            <input type="text" name="kommune" value="<?php echo $_POST['kommune']; ?>" placeholder="Navnet på din kommune"
                                   class="w3-input w3-animate-input" required id="inputKommune">
                            <br>

                            <button class="black-button w3-card w3-padding-8" id="nextPageButton">Neste</button>
                            <p id="responseText"></p>
                        </div>
                    </div>
                    <div id="second-page" style="display:none;">
                        <br>
                        <p>
                            Engasjer folk i arbeidet dere gjør og øk samtidig sjansen for å finne de beste ansatte for
                            din bedrift.​
                        </p>

                        <div class=" w3-content w3-center w3-large register-container register-interests">
                            <p>Bedrift:​</p>
                            <input type="text" name="bedriftnavn" value="<?php echo $_POST['bedriftnavn']; ?>" placeholder="Bedriftsnavn"
                                   class="w3-input w3-animate-input"  id="inputBedriftNavn">
                            <p>Org.nr.:​</p>
                            <input type="text" name="Rolle" value="" placeholder="XXXXXXXXXX​"
                                   class="w3-input w3-animate-input"  id="inputBedriftTelefonnummer">

                            <p class="w3-xlarge" style="font-weight:bold;">Si med et ord hva dere ser etter:</p>

                            <div class="w3-col m6 l6 s6">
                                <div class="w3-content w3-center">
                                    <input type="text" name="k1" value="" placeholder="Kompetanse 1​"
                                           class="w3-input w3-animate-input" id="inputName" list="kompetanse">

                                </div>
                                <div class="w3-content w3-center">
                                    <input type="text" name="k2" value="" placeholder="Kompetanse 2"
                                           class="w3-input w3-animate-input" id="inputName" list="kompetanse">

                                </div>
                                <div class="w3-content w3-center">
                                    <input type="text" name="k3" value="" placeholder="Kompetanse 3"
                                           class="w3-input w3-animate-input" id="inputName" list="kompetanse">

                                </div>
                            </div>
                            <datalist id="kompetanse">
                                <option value="Fotografi">
                                <option value="Sosiale medier">
                                <option value="Tekst redigering">
                                <option value="Grafisk animasjon">
                                <option value="Grafisk Design">
                                <option value="Illustrator">
                                <option value="Photoshop">
                                <option value="CSS">
                                <option value="JavaScript">
                                <option value="SQL">
                                <option value="Utvikling">
                                <option value="Programmering">
                                <option value="Informatikk">
                                <option value="Datateknologi">
                                <option value="Matematikk">
                                <option value="Fysikk">
                                <option value="Realfag">
                                <option value="Salg">
                                <option value="Markedsføring">
                                <option value="Pitching">
                                <option value="Kommunikasjon">
                                <option value="Mangfoldsledelse">
                                <option value="Stand">
                                <option value="B2B">
                                <option value="Nettverkbygging">
                            </datalist>

                            <div class="w3-col m6 l6 s6 padding-bottom-16">
                                <div class="w3-content w3-center">
                                    <input type="text" name="i1" value="" placeholder="Interesse 1​​"
                                           class="w3-input w3-animate-input" id="inputName" list="interesse">
                                </div>
                                <div class="w3-content w3-center">
                                    <input type="text" name="i2" value="" placeholder="Interesse 2"
                                           class="w3-input w3-animate-input" id="inputName" list="interesse">
                                </div>
                                <div class="w3-content w3-center">
                                    <input type="text" name="i3" value="" placeholder="Interesse 3"
                                           class="w3-input w3-animate-input" id="inputName" list="interesse">
                                </div>
                            </div>
<!--
                            <datalist id="interesse">
                                <option value="Internet Explorer">
                                <option value="Firefox">
                                <option value="Chrome">
                                <option value="Opera">
                                <option value="Safari">
                            </datalist>-->

                            <br>
                            <label>
                                <p class="w3-margin" style="font-weight:normal">
                                    Jeg godkjenner InMarkets Vilkår for Bruk og <br><a
                                            href="personvern.php" style="text-decoration:underline;" target="_blank">Personvernerklæring</a>.​

                                    <input type="checkbox" name="personvern" id="personvern" value="student"
                                           class="klient-radio "
                                           onclick="studentSelected()" style="width:1px!important; position:relative; left:20px;opacity:0;">
                                    <i class="fas fa-user-tie w3-xlarge new-radio"></i>
                                </p>
                            </label>
                            <div>
                                <button class="black-button w3-card w3-padding-8" type="submit" id="submit">Registrer</button>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="w3-section w3-container w3-card" id="kontaktRespons" style="display:none;">
        <p class="w3-center">Takk for henvendelsen! Vi tar kontakt med deg så snart vi har lansert!</p>
    </div>

    <div class="w3-col l6 register-video " >
        <div class="videoWrapper w3-hide-medium w3-hide-small" style="margin:50px;flex-grow: 1;background-repeat:no-repeat; flex-basis:500px; height:60vh;background-position:center;background-size:cover;">
            <p class="golden-text w3-xxlarge" style="text-align:center; line-height:1; ">Det finnes en enklere måte for bedrifter og jobbsøkere å finne hverandre.​</p>
            <div style="">
                <iframe style="position:absolute; top:30px;" src="https://player.vimeo.com/video/326206969" width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="vimeo-video"></iframe>

            </div>
        </div>
    </div>

    <div class="w3-content w3-container w3-padding-64    margin-top-100" id="kontakt"
         style="min-height: calc(100vh - 300px);">

    </div>
</div>

<?php include_once 'templates/footer.php'; ?>
<script src="js/clientType.js" charset="utf-8"></script>
<script src="js/forhandsregistrering.js" charset="utf-8"></script>
</body>

</html>
