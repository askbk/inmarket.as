<?php
// saniterer input data
$name = $email = $phone = $text = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["website"]);
  $text = test_input($_POST["comment"]);
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
    if(mail("post@imnor.no", // adresse som skal motta eposten
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
