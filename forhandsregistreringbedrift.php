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

    <div class="w3-row margin-top-100" >
        <div class="w3-col m6 l6 w3-card" style="background-color:white">
            <a href="forhandsregistrering.php"  onclick="bedriftClient();">
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
                    <p class="w3-center">Legg igjen kontaktinformasjon her, så ringer vi deg innen et døgn <i class="fas fa-arrow-down"></i></p>
                    <div class="w3-row">
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
                        </div>
                        <div class="w3-col m9">
                            <input type="text" name="name" value="" placeholder="Navn" class="w3-input w3-animate-input" required id="inputName"><br>
                            <input type="text" name="place" value="" placeholder="Videregående skole" id="inputPlace" class="w3-input w3-animate-input" required id="inputPlace"><br>
                            <input type="text" name="phone" value="" placeholder="Telefon" class="w3-input w3-animate-input" required id="inputPhone"><br>
                            <input type="checkbox" name="" value="" required> <label>Jeg har lest og godtatt <a href="personvern.php" style="text-decoration:underline;" target="_blank">personvernerklæringen</a> </label>
                            <button class="white-button w3-card w3-right" type="submit"><i class="fas fa-paper-plane"></i> SEND</button>
                            <p id="responseText"></p>
                        </div>
                    </div>
                </form>

                <h2 style="color">
                    Vi åpner dørene for deg.​
                </h2>

                <p>
                    Lag en gratis bruker for å komme tettere på arbeidsmarkedet.​
                </p>

                <form class="w3-large w3-container" action="index.php" method="post" id="kontaktSkjema">
                    <p class="w3-center">Legg igjen kontaktinformasjon her, så ringer vi deg innen et døgn <i class="fas fa-arrow-down"></i></p>
                    <div class="w3-row">
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
                        </div>
                        <div class="w3-col m9">

                            <p>E-post:</p>
                            <input type="text" name="place" value="" placeholder="deg@eksempel.no​" id="inputPlace" class="w3-input w3-animate-input" required id="inputPlace"><br>
                            <p>Fullt navn (valgfritt):</p>
                            <input type="text" name="name" value="" placeholder="Fornavn og etternavn" class="w3-input w3-animate-input" required id="inputName"><br>
                            <p>Kommune (valgfritt):</p>
                            <input type="text" name="phone" value="" placeholder="Navnet på din kommune" class="w3-input w3-animate-input" required id="inputPhone"><br>
                            <input type="checkbox" name="" value="" required> <label>Jeg har lest og godtatt <a href="personvern.php" style="text-decoration:underline;" target="_blank">personvernerklæringen</a> </label>
                            <button class="white-button w3-card w3-right" type="submit"><i class="fas fa-paper-plane"></i> SEND</button>
                            <p id="responseText"></p>
                        </div>
                    </div>
                </form>


            </div>


            <p style="color:white">12 columns on a small screen, 4 on a medium screen, and 3 on a large screen.</p>
        </div>
        <div class="w3-col m6 l6">
            <p>12 columns on a small screen, 8 on a medium screen, and 9 on a large screen.</p>
        </div>

    <div class="w3-content w3-container w3-padding-64    margin-top-100" id="kontakt" style="min-height: calc(100vh - 300px);">

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
        $("#devs a").click( function() {
            $(".hide").hide(); // hide other divs, marked with hide class
            var c = $(this).attr('class').split(' ')[0]; //Get First Class
            $("#container ."+c).show(); //show anything inside content div with    the    class c (marked with a . to represent class)
        });
    </script>

</body>

</html>
