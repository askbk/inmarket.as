<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$email = $navn = $telefonnummer = $headers = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client = test_input($_POST["client"]);
    $email = test_input($_POST["email"]);
    $navn = test_input($_POST["navn"]);
    $kommune = test_input($_POST["kommune"]);
    $telefonnummer = test_input($_POST["telefonnummer"]);

    $k1 = test_input($_POST["k1"]);
    $k2 = test_input($_POST["k2"]);
    $k3 = test_input($_POST["k3"]);

    $i1 = test_input($_POST["i1"]);
    $i2 = test_input($_POST["i2"]);
    $i3 = test_input($_POST["i3"]);
}


$to = "kontakt@inmarket.as";
$subject = "BRUKER: Forhåndsregistrering";
$message = "
Forhåndsregistrering:

Email (obligatorisk): $email

Navn: $navn
Telefon: $telefonnummer
Type: $client
Kommune: $kommune

Kvalifikasjon 1: $k1
Kvalifikasjon 2: $k2
Kvalifikasjon 3: $k3
Interesse 1: $i1
Interesse 2: $i2
Interesse 3: $i3

";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text; charset=UTF-8" . "\r\n";
$headers .= 'From: forhåndsregistrering' . "\r\n";

if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)){
    if(mail($to, $subject, $message, $headers)){
        echo "Takk for registreringen!";
    } else {
        echo "En feil oppstod!";
    }
} else {
    echo "Ugyldige tegn!";
}
?>
