<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $phone = test_input($_POST["phone"]);
}

$to = "inmarket@imnor.no, skretteberg@imnor.no";
$subject = "Henvendelse fra $phone";
$message = "Henvendelse fra $phone ønsker å bli kontaktet innen 24 timer.";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text; charset=UTF-8" . "\r\n";
$headers .= 'From: Meny <' . $phone . '>' . "\r\n";

if(preg_match("#[-a-zA-Z0-9éèÉÈäöæøåÄÖÆØÅ._ ]+#",$phone) {
    if(mail($to, $subject, $message, $headers)){
        echo "Takk for henvendelsen!";
    } else {
        echo "En feil oppstod!";
    }
} else {
    echo "Ugyldige eller for mange tegn!";
}
?>
