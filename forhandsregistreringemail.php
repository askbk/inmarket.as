<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$email = $birthdate = $phone = $headers = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client = test_input($_POST["client"]);
    $email = test_input($_POST["email"]);
    $birthdate = test_input($_POST["birthdate"]);
}

$to = "kontakt@inmarket.as";
$subject = "Forhåndsregistrering for $name";
$message = "
Forhåndsregistrering:
Email: $email 
Fødselsdato: $birthdate
Type: $client
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text; charset=UTF-8" . "\r\n";
$headers .= 'From: forhåndsregistrering' . "\r\n";

if (preg_match("#[-a-zA-Z0-9éèÉÈäöæøåÄÖÆØÅ._ ]+#",$name) AND
    preg_match("#[-a-zA-Z0-9.@+!=()_:]+#", $place) AND
    preg_match("#[-a-zA-Z0-9.@+!=()_:]+#", $phone)) {
    if(mail($to, $subject, $message, $headers)){
        echo "Takk for registreringen!";
    } else {
        echo "En feil oppstod!";
    }
} else {
    echo "Ugyldige tegn!";
}
?>
