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
    <div class="w3-col l6 w3-card" style="background-color:white">
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


            <form class="w3-large w3-container" action="index.php" method="post" id="kontaktSkjemaBedrift">
                <div class="w3-row">

                    <div id="first-page">

                        <br>


                        <p>
                            Engasjer folk i arbeidet dere gjør og øk samtidig sjansen for å finne de beste ansatte for
                            din bedrift.​
                        </p>
                        <!--
                        <div class="w3-col m3">
                            <label>
                                <input type="radio" name="client" value="elev" class="klient-radio" checked onclick="elevSelected()">
                                <i class="fas fa-user w3-xlarge radio"></i>
                                Elev
                            </label><br>
                            <label>
                                <input type="radio" name="client" value="student" class="klient-radio" onclick="studentSelected()">
                                <i class="fas fa-user-graduate w3-xlarge radio"></i>
                                Student
                            </label><br>
                            <label>
                                <input type="radio" name="client" value="bedrift" class="klient-radio" onclick="bedriftSelected()">
                                <i class="fas fa-user-tie w3-xlarge radio"></i>
                                Bedrift
                            </label>
                        </div>-->


                        <div class=" w3-content w3-center register-container">
                            <p>Fullt navn:</p>
                            <input type="text" name="navn" value="" placeholder="Fornavn og etternavn"
                                   class="w3-input w3-animate-input" required id="inputName">
                            <p>E-post:</p>
                            <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="deg@eksempel.no​" id="inputPlace"
                                   class="w3-input w3-animate-input" required id="inputEpost">


                            <p>Telefon:​</p>
                            <input type="tel" name="telefon" value="" placeholder="+XX XXXXXXXX​"
                                   class="w3-input w3-animate-input" required id="inputKommune">
                            <p>Stilling:</p>
                            <input type="text" name="rolle" value="" placeholder="sjef / ansatt / CEO / osv"
                                   class="w3-input w3-animate-input" required id="inputKommune">
                            <p>Kommune:</p>
                            <input type="text" name="kommune" value="<?php echo $_POST['kommune']; ?>" placeholder="Navnet på din kommune"
                                   class="w3-input w3-animate-input" required id="inputKommune">
                            <br>

                            <button class="black-button w3-card w3-padding-8" type="submit"
                                    onsubmit="return nextPageBedrift()" onclick="nextPageBedrift();">Neste
                            </button>
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
                                    <input type="text" name="k1" value="" placeholder="Kvalifikasjon 1​"
                                           class="w3-input w3-animate-input" id="inputName">

                                </div>
                                <div class="w3-content w3-center">
                                    <input type="text" name="k2" value="" placeholder="Kvalifikasjon 2"
                                           class="w3-input w3-animate-input" id="inputName">

                                </div>
                                <div class="w3-content w3-center">
                                    <input type="text" name="k3" value="" placeholder="Kvalifikasjon 3"
                                           class="w3-input w3-animate-input" id="inputName">

                                </div>
                            </div>

                            <div class="w3-col m6 l6 s6 padding-bottom-16">
                                <div class="w3-content w3-center">
                                    <input type="text" name="i1" value="" placeholder="Interesse 1​​"
                                           class="w3-input w3-animate-input" id="inputName">
                                </div>
                                <div class="w3-content w3-center">
                                    <input type="text" name="i2" value="" placeholder="Interesse 2"
                                           class="w3-input w3-animate-input" id="inputName">
                                </div>
                                <div class="w3-content w3-center">
                                    <input type="text" name="i3" value="" placeholder="Interesse 3"
                                           class="w3-input w3-animate-input" id="inputName">
                                </div>
                            </div>

                            <br>
                            <label>
                                <p class="w3-margin" style="font-weight:normal">


                                    Jeg godkjenner InMarkets Vilkår for Bruk og <br><a
                                            href="personvern.php" style="text-decoration:underline;" target="_blank">Personvernerklæring</a>.​

                                    <input type="checkbox" name="personvern" id="personvern" value="student"
                                           class="klient-radio "
                                           onclick="studentSelected()" style="width:1px; position:relative; left:20px;">
                                    <i class="fas fa-user-tie w3-xlarge new-radio"></i>
                                </p>

                            </label>
                            <!--
                                                        <input type="checkbox" name="" value="" id="personvern"> <label>Jeg har lest og godtatt <a
                                                                    href="personvern.php" style="text-decoration:underline;" target="_blank">personvernerklæringen</a>
                                                        </label>-->


                            <div>
                                <button class="black-button w3-card w3-padding-8" type="submit"
                                        onsubmit="return nextPage()" onclick="nextPage();">Registrer
                                </button>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </form>
            <div class="w3-section w3-card w3-container" id="kontaktRespons" style="display:none;">
                <p class="w3-center">Takk for henvendelsen! Vi tar kontakt med deg så snart vi har lansert!</p>
            </div>
        </div>
    </div>

    <div class="w3-col l6 register-video " >

        <div class="videoWrapper w3-hide-medium w3-hide-small" style="margin:50px;flex-grow: 1;background-repeat:no-repeat; flex-basis:500px; height:60vh;background-position:center;background-size:cover;">
            <p class="golden-text w3-xxlarge" style="text-align:center; line-height:1; ">Det finnes en enklere måte for bedrifter og jobbsøkere å finne hverandre.​</p>
            <div style="">
                <iframe style="position:absolute; top:30px;" src="https://player.vimeo.com/video/326206969" width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="vimeo-video"></iframe>

            </div>
        </div>
        <!--
    <p>12 columns on a small screen, 8 on a medium screen, and 9 on a large screen.</p>-->
    </div>

    <div class="w3-content w3-container w3-padding-64    margin-top-100" id="kontakt"
         style="min-height: calc(100vh - 300px);">

    </div>
    <!--
 <h1 class="w3-center forhandsregistrer-tittel" id="kontaktHeader">Forhåndsregistrering </h1>
 <div class="">

  <form class="w3-large w3-container" action="index.php" method="post" id="kontaktSkjema">
      <p class="w3-center"> Registrer brukeren din på forhånd  <i class="fas fa-arrow-down"></i></p>
   <div class="w3-row">
          <div class="w3-col m3 w3-card w3-padding">

              <label>
                  <input type="radio" name="client" value="elev" class="klient-radio" onclick="elevSelected()">
                  <i class="fas fa-user-tie w3-xlarge radio"></i>
                  Videregående elev
              </label>

              <label><br>
                  <input type="radio" name="client" value="student" class="klient-radio" onclick="studentSelected()">
                  <i class="fas fa-user-tie w3-xlarge radio"></i>
                  Student
              </label>
              <label> <br>
                  <input type="radio" name="client" value="arbeidsledig" class="klient-radio" onclick="arbeidsledigSelected()">
                  <i class="fas fa-user-tie w3-xlarge radio"></i>
                  Arbeidssøkere
              </label>
              <label> <br>
                  <input type="radio" name="client" value="ansatt" class="klient-radio" onclick="ansattSelected()">
                  <i class="fas fa-user-graduate w3-xlarge radio"></i>
                  Ansatt
              </label>

              <label> <br>
                  <input type="radio" name="client" value="bedrift" class="klient-radio" checked onclick="bedriftSelected()">
                  <i class="fas fa-user w3-xlarge radio"></i>
                  Bedrift
              </label>






          </div>
          <div class="w3-col m9">
              <input type="text" name="navn" value="" placeholder="Navn"  class="w3-input w3-animate-input w3-margin " required id="navn">
              <input type="text" name="email" value="" placeholder="Email" class="w3-input w3-animate-input w3-margin " required id="email" >
              <input type="text" name="telefonnummer" value="" placeholder="Telefonnummer (valgfritt)"  class="w3-input w3-animate-input w3-margin " id="telefonnummer">
              <input id = "bedriftkode" type="text" name="orgKode" value="" placeholder="Organisasjonsnummer" style="display:none"  class="w3-input w3-animate-input w3-margin">
              <br>

              <label  class = "w3-margin" >Jeg har lest og godtatt <a href="personvern.php" style="text-decoration:underline;" target="_blank">personvernerklæringen</a> </label><input type="checkbox" name="" value="" required style="width:25px;height:25px;position:relative; top:6px;">

              <button class="black-button w3-card w3-right" type="submit"><b class="fas fa-paper-plane"></b> <b>REGISTRER</b></button>
              <p id="responseText"></p>
          </div>

  </form>
  <div class="w3-section w3-card w3-container" id="kontaktRespons" style="display:none;">
      <p class="w3-center">Takk for registreringen! Email vil bli sendt til deg når appen er klar!</p>
  </div>
                  </div>
    </div>
    -->
</div>

<!-- Footer -->
<!--<input type="text" name="birthdate" value="" placeholder="Fødselsdato" class="w3-input w3-animate-input w3-margin " required id="datepicker" >-->

<?php include_once 'templates/footer.php'; ?>
<script src="js/clientType.js" charset="utf-8"></script>
<script src="js/forhandsregistrering.js" charset="utf-8"></script>

<script>
    $("#devs a").click(function () {
        $(".hide").hide(); // hide other divs, marked with hide class
        var c = $(this).attr('class').split(' ')[0]; //Get First Class
        $("#container ." + c).show(); //show anything inside content div with    the    class c (marked with a . to represent class)
    });
</script>

</body>

</html>
