<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $place = $phone = $headers = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $place = test_input($_POST["place"]);
  $phone = test_input($_POST["phone"]);
  $client = test_input($_POST["client"]);
}

$to = "inmarket@imnor.no, skretteberg@imnor.no";
$subject = "Henvendelse fra $name";
$message = "Henvendelse fra $name ved $place, tlf.: <$phone>. Type: $client.";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text; charset=UTF-8" . "\r\n";
$headers .= 'From: Kontaktskjema <' . $phone . '>' . "\r\n";

if(preg_match("#[-a-zA-Z0-9éèÉÈäöæøåÄÖÆØÅ._ ]+#",$name) AND
   preg_match("#[-a-zA-Z0-9.@+!=()_:]+#", $email) {
    if(mail($to, $subject, $message, $headers)){
        echo "Takk for henvendelsen!";
    } else {
        echo "En feil oppstod!";
    }
} else {
    echo "Ugyldige tegn!";
}
?>
