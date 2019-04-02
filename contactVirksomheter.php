<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$bedriftnavn = $place = $email = $headers = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $bedriftnavn = test_input($_POST["bedriftnavn"]);
    $place = test_input($_POST["kommune"]);
    $email = test_input($_POST["email"]);
}

$to = "kontakt@inmarket.as";
$subject = "Henvendelse fra $bedriftnavn";
$message = "$bedriftnavn i $place, e-post: <$email> ønsker å avtale et møte.";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text; charset=UTF-8" . "\r\n";
$headers .= 'From: Kontaktskjema <' . $email . '>' . "\r\n";

if (preg_match("#[-a-zA-Z0-9éèÉÈäöæøåÄÖÆØÅ._ ]+#",$bedriftnavn) AND
    preg_match("#[-a-zA-Z0-9éèÉÈäöæøåÄÖÆØÅ._ ]+#", $place) AND
    preg_match("#[-a-zA-Z0-9.@+!=()_:]+#", $email)) {
    if(mail($to, $subject, $message, $headers)){
        echo "Takk for henvendelsen!";
    } else {
        echo "En feil oppstod!";
    }
} else {
    echo "Ugyldige tegn!";
}
?>
