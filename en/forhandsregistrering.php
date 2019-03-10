<!DOCTYPE html>
<html>

<head>
    <title>Register | InMarket</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>



    <div class="w3-content w3-container w3-padding-64 margin-top-100" id="kontakt" style="min-height: calc(100vh - 300px);">
        <h1 class="w3-center forhandsregistrer-tittel" id="kontaktHeader">Pre-registration</h1>
        <div class="">
            <form class="w3-large w3-container" action="index.php" method="post" id="kontaktSkjema">
                <p class="w3-center">Pre-register your user profile<i class="fas fa-arrow-down"></i></p>
                <div class="w3-row">
                    <div class="w3-col m3 w3-card w3-padding">

                        <label>
                            <input type="radio" name="client" value="elev" class="klient-radio" onclick="elevSelected()">
                            <i class="fas fa-user-tie w3-xlarge radio"></i>
                            High school student
                        </label>

                        <label><br>
                            <input type="radio" name="client" value="student" class="klient-radio" onclick="studentSelected()">
                            <i class="fas fa-user-tie w3-xlarge radio"></i>
                            University student
                        </label>
                        <label> <br>
                            <input type="radio" name="client" value="arbeidsledig" class="klient-radio" onclick="arbeidsledigSelected()">
                            <i class="fas fa-user-tie w3-xlarge radio"></i>
                            Jobseeker
                        </label>
                        <label> <br>
                            <input type="radio" name="client" value="ansatt" class="klient-radio" onclick="ansattSelected()">
                            <i class="fas fa-user-graduate w3-xlarge radio"></i>
                            Employee
                        </label>

                        <label> <br>
                            <input type="radio" name="client" value="bedrift" class="klient-radio" checked onclick="bedriftSelected()">
                            <i class="fas fa-user w3-xlarge radio"></i>
                            Company
                        </label>
                    </div>
                    <div class="w3-col m9">
                        <input type="text" name="navn" value="" placeholder="Name"  class="w3-input w3-animate-input w3-margin " required id="navn">
                        <input type="text" name="email" value="" placeholder="Email" class="w3-input w3-animate-input w3-margin " required id="email" >
                        <!--<input type="text" name="birthdate" value="" placeholder="Fødselsdato" class="w3-input w3-animate-input w3-margin " required id="datepicker" >-->
                        <input type="text" name="telefonnummer" value="" placeholder="Phone number (optional)"  class="w3-input w3-animate-input w3-margin " id="telefonnummer">
                        <br>

                        <label  class="w3-margin">I have read and accepted the InMarket <a href="personvern.php" style="text-decoration:underline;" target="_blank">privacy policy</a> </label><input type="checkbox" name="" value="" required style="width:25px;height:25px;position:relative; top:6px;">

                        <button class="black-button w3-card w3-right" type="submit"><i class="fas fa-paper-plane"></i> <strong>Register</strong></button>
                        <p id="responseText"></p>
                    </div>
                </div>
            </form>
            <div class="w3-section w3-card w3-container" id="kontaktRespons" style="display:none;">
                <p class="w3-center">Thank you! You will receive and e-mail when the app has launched!</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <script src="../js/clientType.js" charset="utf-8"></script>
    <script src="../js/forhandsregistrering.js" charset="utf-8"></script>
</body>

</html>
