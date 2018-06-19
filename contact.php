<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $email = $phone = $headers = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
}

$to = "inmarket@imnor.no, skretteberg@imnor.no";
$subject = "Henvendelse fra $name";
$message = "Henvendelse fra $name <$email>, <$phone>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text; charset=UTF-8" . "\r\n";
$headers .= 'From: Kontaktskjema <' . $email . '>' . "\r\n";

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
