<?php
// saniterer input data
$name = $email = $phone = $text = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $text = test_input($_POST["text"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(preg_match("#[-a-zA-Z0-9éèÉÈäöæøåÄÖÆØÅ._ ]+#",$name) AND
   preg_match("#[-a-zA-Z0-9.@+!=()_:]+#",$email) AND
   strlen($text) < 500) {
    if(mail("inmarket@imnor.no", // adresse som skal motta eposten
            "Henvendelse gjennom kontaktskjema fra $name", // emne
            "Melding fra $name <$email>, <$phone>:\n\n$text", // meldingsteksten
            "From: Tilbakemeldingsskjema <$email>")) // avsender
    {
        echo "Meldingen ble sendt!";
    } else {
        echo "En feil oppstod!";
    }
} else {
    echo "Ugyldige eller for mange tegn!";
}
?>
