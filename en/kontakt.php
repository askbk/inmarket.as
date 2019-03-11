<!DOCTYPE html>
<html>

<head>
    <title>Contact us | InMarket</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>

    <!-- Container (kontakt oss) -->
    <div class="w3-content w3-container w3-padding-64 margin-top-100" id="kontakt" style="min-height: calc(100vh - 300px);">
        <h1 class="w3-center" id="kontaktHeader">Contact us</h1>
        <div class="">
            <form class="w3-large w3-container" action="index.php" method="post" id="kontaktSkjema">
                <p class="w3-center">Leave your contact information here, and we'll call you within a day<i class="fas fa-arrow-down"></i></p>
                <div class="w3-row">
                    <div class="w3-col m3">
                        <label>
                            <input type="radio" name="client" value="elev" class="klient-radio" checked onclick="elevSelected()">
                            <i class="fas fa-user w3-xlarge radio"></i>
                            High school student
                        </label><br>
                        <label>
                            <input type="radio" name="client" value="student" class="klient-radio" onclick="studentSelected()">
                            <i class="fas fa-user-graduate w3-xlarge radio"></i>
                            University student
                        </label><br>
                        <label>
                            <input type="radio" name="client" value="bedrift" class="klient-radio" onclick="bedriftSelected()">
                            <i class="fas fa-user-tie w3-xlarge radio"></i>
                            Company
                        </label>
                    </div>
                    <div class="w3-col m9">
                        <input type="text" name="name" value="" placeholder="Name" class="w3-input w3-animate-input" required id="inputName"><br>
                        <input type="text" name="place" value="" placeholder="Hight school" id="inputPlace" class="w3-input w3-animate-input" required id="inputPlace"><br>
                        <input type="text" name="phone" value="" placeholder="Phone" class="w3-input w3-animate-input" required id="inputPhone"><br>
                        <input type="checkbox" name="" value="" required> <label>I have read and accepted the InMarket <a href="personvern.php" style="text-decoration:underline;" target="_blank">privacy policy</a> </label>
                        <button class="white-button w3-card w3-right" type="submit"><i class="fas fa-paper-plane"></i> SEND</button>
                        <p id="responseText"></p>
                    </div>
                </div>
            </form>
            <div class="w3-section w3-card w3-container" id="kontaktRespons" style="display:none;">
                <p class="w3-center">Thank you! We'll contact you as soon as possible!</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <script src="js/clientType.js" charset="utf-8"></script>
    <script src="js/contactForm.js" charset="utf-8"></script>
</body>

</html>
