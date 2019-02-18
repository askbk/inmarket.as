<div class="w3-display-container parallax-img bgimg-allinclusive-3" style="height:70vh;">
    <div class="w3-display-bottomright text-shadow w3-jumbo white-text" style="right:5%;bottom:5%;">
        WORKSHOP
    </div>
</div>

<div class="black-bg">
    <article class="w3-content w3-xlarge w3-container white-text">
        <p>Alle lærer seg teknikker for å skape seg en trygg grunnmur som kan adapteres på alle scener og i alle situasjoner.​</p>
        <p>Gjennom praktiske øvelser gir vi din bedrift konkrete verktøy og løsninger for å mestre det å kommunisere.</p>
    </article>
</div>
<div class="" id="workshop-anchor"></div>
<div class="w3-row">
    <a href="#workshop-anchor" class="hover-shadow-inset mobile-large w3-col m6 w3-card w3-center golden-button">
        FORM WORKSHOPEN DU ØNSKER DEG
    </a>
    <a href="https://www.allinclusivetalk.com/" target="_blank" class="hover-shadow-inset mobile-large w3-col m6 w3-card w3-center golden-button">
        OM «ALL INCLUSIVE TALK»
    </a>
</div>
<div class="w3-content w3-container w3-padding-32" id="workshop">
    <div class="">
        <form class="w3-xlarge w3-container" action="index.php" method="post" id="kontaktSkjema">
            <div class="w3-row">
                <div class="w3-col m8">
                    <p>Workshopen skal løse følgende kommunikasjonskonflikt:</p>
                </div>
                <div class="w3-col m4 w3-right">
                    <div class="">
                        <label class="checkbox">
                            <input type="radio" name="conflict" value="" checked>
                            <i class="far w3-xlarge radio checkbox"></i>
                            Kollega til kollega
                        </label><br>
                        <label>
                            <input type="radio" name="conflict" value="">
                            <i class="far w3-xlarge radio"></i>
                            Arbeidsgiver til arbeidstaker
                        </label><br>
                        <label>
                            <input type="radio" name="conflict" value="">
                            <i class="far w3-xlarge radio"></i>
                            I ledelsen
                        </label><br>
                        <label>
                            <input type="radio" name="conflict" value="">
                            <i class="far w3-xlarge radio"></i>
                            Presentasjoner og pitcher
                        </label><br>
                        <label>
                            <input type="radio" name="conflict" value="">
                            <i class="far w3-xlarge radio"></i>
                            Intervjuer
                        </label>
                    </div>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col m8">
                    Antall deltakere på workshopen:
                </div>
                <div class="w3-col m4 w3-right">
                    <select class="w3-select" name="option">
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col m8">
                    Workshopen skal ta plass på
                </div>
                <div class="w3-col m4 w3-right">
                    <div class="">
                        <label>
                            <input type="radio" name="location" value="" checked>
                            <i class="far w3-xlarge radio"></i>
                            Våre fasiliteter
                        </label><br>
                        <label>
                            <input type="radio" name="location" value="">
                            <i class="far w3-xlarge radio"></i>
                            Valgt lokasjon i Oslo
                        </label><br>
                        <label>
                            <input type="radio" name="location" value="">
                            <i class="far w3-xlarge radio"></i>
                            Valgt lokasjon i Drammen
                        </label>
                    </div>
                </div>
            </div>
            <div class="w3-row w3-row-padding">
                <div class="w3-col m6">
                    <input type="text" name="bedrift" value="" placeholder="Bedrift" class="w3-input w3-animate-input" required id="inputName"><br>
                    <input type="text" name="phone" value="" placeholder="Telefon" class="w3-input w3-animate-input" required id="inputPhone"><br>

                </div>
                <div class="w3-col m6">
                    <input type="text" name="email" value="" placeholder="E-post" class="w3-input w3-animate-input" required id="inputEmail"><br>
                </div>
            </div>
            <div class="w3-row">
                <input type="checkbox" name="" value="" required> <label>Jeg har lest og godtatt <a href="personvern.php" style="text-decoration:underline;" target="_blank">personvernerklæringen</a> </label>
                <p>Dette er en uforpliktende bestilling. Vi ringer deg og gir deg forslag på opplegg sammen med pris.</p>
                <button class="black-button w3-card w3-right" type="submit"><i class="fas fa-paper-plane"></i> Bestill</button>
            </div>
        </form>
        <div class="w3-section w3-card w3-container w3-xlarge" id="kontaktRespons" style="display:none;">
            <p class="w3-center">Takk for henvendelsen! Vi tar kontakt med deg så raskt som mulig!</p>
        </div>
    </div>
</div>

<script type="text/javascript">
const conflictRadios = document.querySelectorAll("input[name='conflict']"),
    locationRadios = document.querySelectorAll("input[name='location']"),
    headCount = document.getElementById('id'),
    bedrift = document.getElementById('id'),
    email = document.getElementById('id'),
    phone = document.getElementById('id');

function check(n) {
    for(let i = 0; i < 3; ++i) {
        radioButtons[i].checked = false;
    }

    radioButtons[n].checked = true;
}

$("#workshop").submit(function (e) {
    e.preventDefault();
    $.post("contactWorkshop.php", $(this).serialize(), function () {
        $("#workshop").hide();
        $("#kontaktRespons").show();
    });
})

</script>
