<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Personvern | InMarket Norge</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="Rådgivning kombinert med jobbskygging og mentoring. Møt fremtiden din og la den forme deg.">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#c08d42">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="fontawesome-free-5.1.0-web/css/all.css">
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/w3pro.css" />
    <script type="application/ld+json" href="json/about.json"></script>
    <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="js/jquery.color-2.1.2.min.js" charset="utf-8"></script>
    <!-- Hotjar Tracking Code for imnor.no -->
    <script>
        if (localStorage.tracking == "true") {
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:959986,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
                console.log("hotjar enabled");
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        }
    </script>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>

    <div class="w3-content w3-container margin-top-100" id="personvern-innstillinger">
        <h2 class=" w3-center">Personverninnstillinger</h2>
        <p>Denne nettsiden bruker informasjonskapsler for å føre statistikk og forbedre fremtidig brukeropplevelse.</p>
        <div class="">
            <ul class="w3-ul">
                <li>
                    <label>
                        <input type="checkbox" name="" value="accepttracking" id="trackingSetting">
                        Jeg tillater at anonyme data blir samlet inn til bruk i trafikkanalyse.
                    </label>
                </li>
            </ul>
            <p class="" id="responseText" style="visibility:hidden;">innstillinger lagret!</p>
            <button type="button" name="button" class="white-button w3-card" onclick="saveSettings()">Lagre innstillinger</button>
        </div>
    </div>

    <!-- Container -->
    <div class="w3-content w3-container w3-padding-64" id="policy">
        <h2 class=" w3-center">Personvernerklæring</h2>
        <p>Denne personvernerklæringen forteller om hvordan InMarket Samuel Bigirimana, her kalt InMarket, samler inn og bruker personopplysninger.</p>
        <p>InMarket, ved direktøren, er behandlingsansvarlig for bedriftens behandling av personopplysninger. Der det daglige ansvaret er delegert, kommer det fram under hvert enkelt punkt. Delegeringen omfatter kun oppgavene og ikke ansvaret. Erklæringen inneholder opplysninger du har krav på når det samles inn opplysninger fra nettstedet vårt (personopplysningsloven § 19) og generell informasjon om hvordan vi behandler personopplysninger (personopplysningsloven § 18 1. ledd).</p>
        <h3 class=" w3-center">Behandling av personopplysninger på www.imnor.no</h3>
        <p>IT-ansvarlig har det daglige ansvaret for InMarkets behandlinger av personopplysninger på Imnor.no. Det er frivillig for de som besøker nettsidene å oppgi personopplysninger i forbindelse med tjenester, for eksempel å registrere bruker i database. Behandlingsgrunnlaget er samtykke fra den enkelte, med mindre annet er spesifisert.</p>
        <p>Domeneshop er InMarkets databehandler, og er vår leverandør av webhotell.</p>
        <p>Opplysninger som samles inn i forbindelse med drift av nettsted, lagres på egne servere som driftes av leverandøren. Det er kun InMarket og Domeneshop som har tilgang til opplysningene som samles inn. En egen databehandleravtale mellom InMarket og Domeneshop regulerer hvilken informasjon leverandøren har tilgang til og hvordan den skal behandles.</p>
        <h3 class=" w3-center">Nettstatistikk</h3>
        <p>InMarket samler inn avidentifiserte opplysninger om besøkende på imnor.no. Formålet med dette er å utarbeide statistikk som vi bruker til å forbedre og videreutvikle informasjonstilbudet på nettstedet. Eksempler på hva statistikken gir svar på, er hvor mange som besøker ulike sider, hvor lenge besøket varer, hvilke nettsteder brukerne kommer fra og hvilke nettlesere som benyttes.</p>
        <p>Opplysningene behandles i avidentifisert og aggregert form. Med avidentifisert menes at vi ikke kan spore opplysningene vi samler inn tilbake til den enkelte bruker. Vi samler inn hele IP-adressen, men IP-adressen avidentifiseres slik at bare de tre første gruppene i adressen brukes til å generere statistikk. Det vil si at dersom IP-adressen består av numrene 195.159.103.82, brukes bare 195.159.103.xx. I tillegg behandles IP-adressene på aggregert nivå, det vil si at all data slås sammen til en gruppe og ikke behandles individuelt.</p>
        <p>Vi bruker analyseverktøyet Hotjar på vårt nettsted. Dette er et proprietært verktøy med lukket kildekode. Informasjon fra dette verktøyet er lagret hos Amazon Web Services i Irland, og InMarket Norge er den eneste aktøren med tilgang til disse dataene.</p>
        <h3 class=" w3-center">Informasjonskapsler</h3>
        <p>Informasjonskapsler (cookies) er små tekstfiler som plasseres på din datamaskin når du laster ned en nettside.</p>
        <p>Lagring av opplysninger og behandling av disse opplysningene er ikke tillatt med mindre bruker både har blitt informert om og har gitt sitt samtykke til behandlingen. Brukeren skal få vite om og godkjenne hvilke opplysninger som behandles, hva formålet med behandlingen er og hvem som behandler opplysningene, jf. ekomloven § 2-7b.</p>
        <p>Følgende informasjonskapsler brukes på Imnor.no:</p>
        <ul>
            <li>Analyseverktøyet Hotjar plasserer én informasjonskapsel ("_hjIncludedInSample") for til bruk for å spore besøk. Denne informasjonskapselen blir slettet når man avslutter nettleseren.</li>
        </ul>
        <h3 class=" w3-center">Kontaktskjema på nettside</h3>
        <p>På nettsiden kan man be InMarket om å kontakte angående videre veiledning eller ønsker om bedriftsbesøk ol.. Vi registrer da navn, telefonnummer og epostkonto slik at vi kan følge opp kontakten. InMarket kommer ikke til å bruke denne informasjonen til andre formål eller dele den med tredjeparter uten brukers samtykke.</p>
        <h3 class=" w3-center">Spørreundersøkelser</h3>
        <p>Organisasjonsdirektør har det daglige ansvaret for InMarkets spørreundersøkelser. Vi vil alltid informere om formålet med spørreundersøkelsen, og hvorvidt den er anonym eller ikke. InMarket vil ikke dele opplysningene med andre eller bruke opplysningene til andre formål enn det som er angitt.</p>
        <strong>Anonyme undersøkelser</strong>
        <p>Dersom undersøkelsen er anonym, vil ikke InMarket samle inn noe informasjon som kan kobles til deg.</p>
        <strong>Identifiserbare undersøkelser</strong>
        <p>Dersom undersøkelsen ikke er anonym, kan InMarket identifisere de som har besvart undersøkelsen.</p>
        <h3 class=" w3-center">E-post og telefon</h3>
        <p>InMarket benytter e-post og telefon som en del av det daglige arbeidet. Daglig leder har ansvaret for behandlingen av personopplysninger i denne sammenheng. Relevante opplysninger som fremkommer av telefonsamtaler og e-postutveksling som skjer som en del av veiledning eller oppfølgning journalføres.</p>
        <p>InMarkets medarbeidere benytter i tillegg e-post i alminnelig dialog med interne og eksterne kontakter. Den enkelte er ansvarlig for å slette meldinger som ikke lenger er aktuelle, og minst hvert år gjennomgå og slette unødvendig innhold i e-postkassen. Ved fratreden slettes e-postkontoene, men enkelte relevante e-poster vil normalt bli overført til kollegaer.</p>
        <p>Sensitive personopplysninger skal ikke sendes med e-post.</p>
        <p>Vi gjør deg oppmerksom på at vanlig e-post er ukryptert. Vi oppfordrer deg derfor ikke til å sende taushetsbelagte, sensitive eller andre fortrolige opplysninger via e-post.</p>
        <p>Telefonsamtaler logges ikke, men personell fra InMarket vil etter brukers samtykke skrive ned essensen av det som blir sagt, for å optimalisere videre oppfølgning. InMarket kommer ikke til å dele disse opplysningene med tredjepart uten brukers samtykke, og sletter informasjonen innen ett år fra siste gang bruker var i kontakt med InMarket.</p>
        <h3 class=" w3-center">Fysisk gruppeveiledning</h3>
        <p>Alle ansatte i InMarket har taushetsplikt for det som blir sagt under gruppeveiledningsmøter med elever og studenter. Dette ansvaret tilfalles den enkelte gruppeveileder. Veileder fra InMarket skal ikke videreformidle noe av informasjonen som blir sagt under møtene til noen andre ved mindre elevene eller studentene har sagt noe annet.</p>
        <h3 class=" w3-center">Besøk i InMarkets lokaler og deltakelse på arrangement i vår regi</h3>
        <strong>Liste over besøksdeltakere</strong>
        <p>InMarket lagrer persondata om studenter, bedriftsansatte, elever og elevgrupper i våre databaser. Plattformen vi bruker for å lagre informasjonen er Portal Office. Dersom en elev, student eller bedrift ikke lenger benytter seg av produktet til InMarket, vil informasjonen slettes fra databasen innen 2 år.</p>
        <strong>Liste over besøkende</strong>
        <p>InMarket fører per dags dato ingen spesifikk liste over besøkende inn og ut av bedriftslokalene våre. Når du melder deg på besøk til andre bedrifter gjennom InMarket, er det den enkeltes bedrift sitt ansvar å ivareta personvern om eventuelle opplysninger som oppgis under et slikt besøk. InMarket kommer ikke til å dele opplysninger om besøkende videre til bedriften uten de besøkendes samtykke.</p>
        <h3 class=" w3-center">Opplysninger om ansatte</h3>
        <p>InMarket behandler personopplysninger om sine ansatte for å administrere lønn og personalansvar. Rettslig grunnlag følger av personopplysningsloven § 8, første ledd og § 8 a), b) eller f) samt § 9 a), b) og f). Det er Organisasjonsdirektør som har det daglige ansvaret for dette. Det registreres nødvendige opplysninger for utbetaling av lønn, for eksempel grunndata, lønnsnivå, tidsregistrering, skatteprosent, skattekommune og fagforeningstilhørighet. Andre opplysninger om ansatte er knyttet til vedkommendes arbeidsinstruks og tilrettelegging av vedkommendes arbeid.</p>
        <p>Dessuten registreres det opplysninger i tilknytning til nøkkeladministrasjon av inn- og utpasseringer og opplysninger om tilgangsstyring i IT-systemet. Opplysningene hentes fra de ansatte selv. Opplysningene utleveres bare i forbindelse med lønnsutbetalinger og andre lovpliktige utleveringer. Sletterutiner for personalopplysninger følger regnskapsloven og arkivloven. Opplysninger om navn, stilling og arbeidsområdet regnes å være offentlige opplysninger og kan publiseres på tilsynets nettsider.</p>
        <p>Alle stillingssøknader blir journalført i InMarkets postjournal. Disse blir lagret i vårt elektroniske arkiv i ca. ett år før de makuleres. Alle andre dokumenter, bl.a. søkerlister og innstillinger bevares. </p>
        <p>Her blir blant annet stillingssøknaden arkivert/oppbevart. Personalmapper skal bevares (dvs. at stillingssøknaden ikke blir slettet eller makulert). Personalmapper blir ryddet ved utløp av arbeidsforholdet. </p>
        <h3 class=" w3-center">Rettigheter</h3>
        <p>Alle som spør har rett på grunnleggende informasjon om behandlinger av personopplysninger i en bedrift etter personopplysningslovens § 18, 1. ledd. InMarket har gitt denne informasjonen i denne erklæringen, og vil henvise til den ved eventuelle forespørsler. De som er registrert i en av InMarkets systemer har rett på innsyn i egne opplysninger. Vedkommende har også rett til å be om at uriktige, ufullstendige eller opplysninger InMarket ikke har adgang til å behandle blir rettet, slettet eller supplert. Krav fra den registrerte skal besvares kostnadsfritt og senest innen 30 dager.</p>
    </div>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
    <script src="js/privacySettings.js" charset="utf-8"></script>
    <script async src="js/navbar.js" charset="utf-8"></script>
    <script src="js/acceptTracking.js" charset="utf-8"></script>
</body>

</html>
