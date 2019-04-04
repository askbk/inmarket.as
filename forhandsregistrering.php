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
        <div class="w3-col l6 s6" style="background-color:white;color:black">
            <p class="w3-content w3-center w3-xlarge w3-padding-16">
                Bruker
            </p>
        </div>
        <a href="forhandsregistreringbedrift.php" onclick="bedriftClient();">
            <div class="w3-col l6 s6" style="background-color:black; color:white">
                <p class="w3-content w3-center w3-xlarge w3-padding-16">


                    Bedrift


                </p>

            </div>
        </a>


        <div class="w3-content w3-center" style="flex-basis:800px;padding: 64px calc(5vw);flex-grow:5;">


            <form class="w3-large w3-container" action="index.php" method="post" id="kontaktSkjema">
                <div class="w3-row">

                    <div id="first-page">

                        <br>
                        <p class="w3-xxlarge w3-margin" style="font-weight:bold;">
                            Vi åpner dørene for deg.​
                        </p>

                        <p>
                            Lag en gratis bruker for å komme tettere på arbeidsmarkedet.​
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
                            <p>E-post:</p>
                            <input type="email" name="email" value="" placeholder="deg@eksempel.no​" id="inputPlace"
                                   class="w3-input w3-animate-input w3-padding-16" required id="inputEpost"><br>
                            <p>Fullt navn (valgfritt):</p>
                            <input type="text" name="navn" value="" placeholder="Fornavn og etternavn"
                                   class="w3-input w3-animate-input w3-padding-16" id="inputName"><br>

                            <p>Kommune (valgfritt):</p>
                            <input type="text" name="kommune" value="" placeholder="Navnet på din kommune"
                                   class="w3-input w3-animate-input w3-padding-16" id="inputKommune"><br>


                            <button class="black-button w3-card w3-padding-8" type="submit"
                                    onsubmit="return nextPage()" onclick="nextPage();">Neste
                            </button>
                            <p id="responseText"></p>

                        </div>

                    </div>
                    <div id="second-page" style="display:none;">

                        <br>
                        <p class="w3-xxlarge w3-margin" style="font-weight:bold;">
                            Vi åpner dørene for deg.​
                        </p>
                        <p>
                            Lag en gratis bruker for å komme tettere på arbeidsmarkedet.​
                        </p>


                        <div class="choose-type">
                            <div class="w3-row">
                                <div class="w3-col m4">
                                    <label>
                                        <span>Arbeidssøkere</span>
                                        <input type="radio" name="client" value="arbeidsledig"
                                               class="klient-radio w3-right new-radio" checked
                                               onclick="arbeidsledigSelected()">

                                        <i class="fas fa-user-tie w3-xlarge new-radio"></i>
                                    </label>
                                </div>
                                <div class="w3-col m4">

                                    <label>
                                        <span>Student</span>
                                        <input type="radio" name="client" value="student"
                                               class="klient-radio  w3-right new-radio"
                                               onclick="studentSelected()">
                                        <i class="fas fa-user-tie w3-xlarge new-radio"></i>

                                    </label>
                                </div>

                                <div class="w3-col m4">
                                    <label>
                                        <span>Videregående elev</span>
                                        <input type="radio" name="client" value="elev"
                                               class="klient-radio w3-right new-radio" id="radio-elev"
                                        >


                                        <i class="fas fa-user-tie w3-xlarge new-radio"></i>

                                    </label>

                                </div>


                            </div>
                        </div>


                        <div class=" w3-content w3-center w3-large register-content register-interests">

                            <p class="w3-xlarge" style="font-weight:bold;">Si med et ord (valgfritt):</p>

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
                                <option value="Internet Explorer">
                                <option value="Firefox">
                                <option value="Chrome">
                                <option value="Opera">
                                <option value="Safari">
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

                            <datalist id="interesse">
                                <option value="Internet Explorer">
                                <option value="Firefox">
                                <option value="Chrome">
                                <option value="Opera">
                                <option value="Safari">
                            </datalist>

                            <br>
                            <label>
                                <p class="w3-margin">


                                    Jeg godkjenner InMarkets Vilkår for Bruk og <a
                                            href="personvern.php" style="text-decoration:underline;" target="_blank">Personvernerklæring</a>.​

                                    <input type="checkbox" name="personvern" id="personvern" value="student"
                                           class="klient-radio "
                                           onclick="studentSelected()" style="width:1px; position:relative; left:20px; display:none;">
                                    <i class="fas fa-user-tie w3-xlarge new-radio"></i>
                                </p>

                            </label>
                            <!--
                                                        <input type="checkbox" name="" value="" id="personvern"> <label>Jeg har lest og godtatt <a
                                                                    href="personvern.php" style="text-decoration:underline;" target="_blank">personvernerklæringen</a>
                                                        </label>-->


                            <div>
                                <button class="black-button w3-card w3-padding-8 w3-margin" type="submit"
                                        onsubmit="return nextPage()" onclick="nextPage();">Registrer
                                </button>
                            </div>
                        </div>
                    </div>

            </form>
        </div>
    </div>

</div>
    <div class="w3-col l6 register-video " >

        <div class="videoWrapper w3-hide-medium w3-hide-small" style="margin:50px;flex-grow: 1;background-repeat:no-repeat; flex-basis:500px; height:60vh;background-position:center;background-size:cover; ">
            <p class="golden-text w3-xxlarge w3-margin" style="text-align:center; line-height:1;">Det finnes en enklere måte for bedrifter og jobbsøkere å finne hverandre.​</p>
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
<script src="https://player.vimeo.com/api/player.js"></script>
<script src="js/clientType.js" charset="utf-8"></script>
<script src="js/forhandsregistrering.js" charset="utf-8"></script>
</body>

</html>
