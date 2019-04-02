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
    $telefonnummer = test_input($_POST["telefonnummer"]);
    $orgKode = test_input($_POST["orgKode"]);
}


$to = "kontakt@inmarket.as";
$subject = "Forhåndsregistrering";
$message = "
Forhåndsregistrering:
Navn: $navn
Email: $email
Telefon: $telefonnummer
Type: $client
orgKode (hvis bedrift): $orgKode";

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
