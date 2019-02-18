<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $location = $email = $headcount = $phone = $headers = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $location = test_input($_POST["location"]);
    $phone = test_input($_POST["phone"]);
    $conflict = test_input($_POST["conflict"]);
    $headcount = test_input($_POST["headcount"]);

}

$to = "post@imnor.no, skretteberg@imnor.no, kontakt@inmarket.as";
$subject = "Henvendelse fra $name";
$message = "Workshop\nFra: $name, $email, $phone\nKonflikt: $conflict\nPlass: $location\nAntall: $headcount";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text; charset=UTF-8" . "\r\n";
$headers .= 'From: Workshopskjema <' . $phone . '>' . "\r\n";

if (preg_match("#[-a-zA-Z0-9éèÉÈäöæøåÄÖÆØÅ._ ]+#",$name) AND
    preg_match("#[-a-zA-Z0-9éèÉÈäöæøåÄÖÆØÅ._ ]+#", $location) AND
    preg_match("#[-a-zA-Z0-9.@+!=()_:]+#", $phone)) {
    if(mail($to, $subject, $message, $headers)){
        echo "Takk for henvendelsen!";
    } else {
        echo "En feil oppstod!";
    }
} else {
    echo "Ugyldige tegn!";
}
?>
