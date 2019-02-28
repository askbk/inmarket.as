<!DOCTYPE html>
<html>

<head>
    <title>Registrer | InMarket Norge</title>
    <?php include_once 'templates/head.php'; ?>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            //$( ".selector" ).datepicker(;
            $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd',  defaultDate: new Date('1998-01-01')});

        } );
    </script>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>



    <div class="w3-content w3-container w3-padding-64 margin-top-100" id="kontakt" style="min-height: calc(100vh - 300px);">
        <h1 class="w3-center forhandsregistrer-tittel" id="kontaktHeader">Forhåndsregistrering </h1>
        <div class="">
            <form class="w3-large w3-container" action="index.php" method="post" id="kontaktSkjema">
                <p class="w3-center"> Registrer brukeren din på forhånd  <i class="fas fa-arrow-down"></i></p>
                <div class="w3-row">
                    <div class="w3-col m3 w3-card w3-padding">

                        <label>
                            <input type="radio" name="client" value="bedrift" class="klient-radio" checked onclick="bedriftSelected()">
                            <i class="fas fa-user w3-xlarge radio"></i>
                            Bedrift
                        </label><br>
                        <label>
                            <input type="radio" name="client" value="ansatt" class="klient-radio" onclick="ansattSelected()">
                            <i class="fas fa-user-graduate w3-xlarge radio"></i>
                            Ansatt
                        </label><br>
                        <label>
                            <input type="radio" name="client" value="arbeidsledig" class="klient-radio" onclick="arbeidsledigSelected()">
                            <i class="fas fa-user-tie w3-xlarge radio"></i>
                            Arbeidsledig
                        </label>
                        <label><br>
                            <input type="radio" name="client" value="student" class="klient-radio" onclick="studentSelected()">
                            <i class="fas fa-user-tie w3-xlarge radio"></i>
                            Student
                        </label>
                        <label><br>
                            <input type="radio" name="client" value="elev" class="klient-radio" onclick="elevSelected()">
                            <i class="fas fa-user-tie w3-xlarge radio"></i>
                            Elev
                        </label>
                    </div>
                    <div class="w3-col m9">
                        <input type="text" name="email" value="" placeholder="Email" class="w3-input w3-animate-input w3-margin " required id="email" >
                        <input type="text" name="birthdate" value="" placeholder="Fødselsdato" class="w3-input w3-animate-input w3-margin " required id="datepicker" >
                        <br>
                        <br>
                        <br>

                        <input type="checkbox" name="" value="" required class = "w3-margin" style="width:25px;height:25px;position:relative; top:6px;"> <label>Jeg har lest og godtatt <a href="personvern.php" style="text-decoration:underline;" target="_blank">personvernerklæringen</a> </label>

                        <button class="black-button w3-card w3-right" type="submit"><b class="fas fa-paper-plane"></b> <b>REGISTRER</b></button>
                        <p id="responseText"></p>
                    </div>
                </div>
            </form>
            <div class="w3-section w3-card w3-container" id="kontaktRespons" style="display:none;">
                <p class="w3-center">Takk for registreringen! Email vil bli sendt til deg når appen er klar!</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <script src="js/clientType.js" charset="utf-8"></script>
    <script src="js/forhandsregistrering.js" charset="utf-8"></script>
</body>

</html>
