<div class="w3-display-container parallax-img bgimg-allinclusive-3" style="height:70vh;">
    <div class="w3-display-bottomright text-shadow w3-jumbo white-text" style="right:5%;bottom:5%;">
        WORKSHOP
    </div>
</div>

<div class="black-bg">
    <article class="w3-content w3-xlarge w3-container white-text">
        <p>We all learn techniques that help us create a safe ground that we can adapt to all scenes and situations.</p>
        <p>Through practical exercises, we offer your company concrete tools and solutions so you can master the art of communication.</p>
    </article>
</div>
<div class="" id="workshop-anchor"></div>
<div class="w3-row">
    <a class="hover-shadow-inset mobile-large w3-col m6 w3-card w3-center golden-button" id="workshop-button">
        Shape your workshop
    </a>
    <a href="https://www.allinclusivetalk.com/" target="_blank" class="black-button mobile-large w3-col m6 w3-card w3-center">
        More about «ALL INCLUSIVE TALK»
    </a>
</div>

<div class="w3-content w3-container w3-padding-32" style="display:none;" id="workshop-form">
    <div class="">
        <form class="w3-xlarge w3-container" action="index.php" method="post" id="workshop">
            <div class="w3-row">
                <div class="w3-col m8">
                    <p>Workshopen skal løse følgende kommunikasjonskonflikt:</p>
                </div>
                <div class="w3-col m4 w3-right">
                    <div class="">
                        <label>
                            <input type="radio" name="conflict" value="Kollega til kollega" required>
                            <i class="far w3-xlarge radio checkbox"></i>
                            Kollega til kollega
                        </label><br>
                        <label>
                            <input type="radio" name="conflict" value="Arbeidsgiver til arbeidstaker" required>
                            <i class="far w3-xlarge radio"></i>
                            Arbeidsgiver til arbeidstaker
                        </label><br>
                        <label>
                            <input type="radio" name="conflict" value="I ledelsen" required>
                            <i class="far w3-xlarge radio"></i>
                            I ledelsen
                        </label><br>
                        <label>
                            <input type="radio" name="conflict" value="Presentasjoner og pitcher" required>
                            <i class="far w3-xlarge radio"></i>
                            Presentasjoner og pitcher
                        </label><br>
                        <label>
                            <input type="radio" name="conflict" value="Intervjuer" required>
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
                    <select class="w3-select" name="headcount">
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
                            <input type="radio" name="location" value="våre fasiliteter" required>
                            <i class="far w3-xlarge radio"></i>
                            Våre fasiliteter
                        </label><br>
                        <label>
                            <input type="radio" name="location" value="valgt lokasjon i Oslo" required>
                            <i class="far w3-xlarge radio"></i>
                            Valgt lokasjon i Oslo
                        </label><br>
                        <label>
                            <input type="radio" name="location" value="valgt lokasjon i Drammen" required>
                            <i class="far w3-xlarge radio"></i>
                            Valgt lokasjon i Drammen
                        </label>
                    </div>
                </div>
            </div>
            <div class="w3-row w3-row-padding">
                <div class="w3-col m6">
                    <input type="text" name="name" placeholder="Bedrift" class="w3-input w3-animate-input" required><br>
                    <input type="text" name="phone" placeholder="Telefon" class="w3-input w3-animate-input" required><br>
                </div>
                <div class="w3-col m6">
                    <input type="text" name="email" placeholder="E-post" class="w3-input w3-animate-input" required><br>
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
$("#workshop-button").on("click", function() {
    $("#workshop-form").slideToggle();
})


$("#workshop").submit(function (e) {
    e.preventDefault();
    $.post("contactWorkshop.php", $("#workshop").serialize(), () => {
        $("#workshop").hide();
        $("#kontaktRespons").show();
    });
});

</script>
