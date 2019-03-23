<?php
$to = "kontakt@inmarket.as";
$subject = "Noen ønsker å bestille workshop";
$message = "Noen har trykket på 'Bestill workshop'";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text; charset=UTF-8" . "\r\n";
$headers .= 'From: workshopbestilling' . "\r\n";

mail($to, $subject, $message, $headers);
?>
