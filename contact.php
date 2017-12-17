<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// saniterer input data
$name = $email = $phone = $text = $headers = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $text = test_input($_POST["text"]);
}

$to = "datanet@live.com";
$subject = "Henvendelse fra $name";
$message = "Melding fra $name <$email>, <$phone>:\n\n$text";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text; charset=UTF-8" . "\r\n";
$headers .= 'From: Kontaktskjema <' . $email . '>' . "\r\n";

if(preg_match("#[-a-zA-Z0-9éèÉÈäöæøåÄÖÆØÅ._ ]+#",$name) AND
   preg_match("#[-a-zA-Z0-9.@+!=()_:]+#", $email) AND
   strlen($text) < 1000) {
    if(mail($to, $subject, $message, $headers)){
        echo "Meldingen ble sendt!";
    } else {
        echo "En feil oppstod!";
    }
} else {
    echo "Ugyldige eller for mange tegn!";
}
?>
