<?php




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$email = $birthdate = $headers = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client = test_input($_POST["client"]);
    $email = test_input($_POST["email"]);
    $birthdate = test_input($_POST["birthdate"]);
}

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
debug_to_console( $client);
debug_to_console( $email);
debug_to_console( $birthdate);


$to = "kontakt@inmarket.as";
$subject = "Forhåndsregistrering for $name";
$message = "
Forhåndsregistrering:
Email: $email 
Fødselsdato: $birthdate
Type: $client

Fortell Filip Tangen hvis dette fungerer :)))
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text; charset=UTF-8" . "\r\n";
$headers .= 'From: forhåndsregistrering' . "\r\n";


if (true/*preg_match("/^((((19|[2-9]\d)\d{2})\-(0[13578]|1[02])\-(0[1-9]|[12]\d|3[01]))|(((19|[2-9]\d)\d{2})\-(0[13456789]|1[012])\-(0[1-9]|[12]\d|30))|(((19|[2-9]\d)\d{2})\-02\-(0[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))\-02\-29))$/g",$birthdate) AND
    preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)*/){
    if(mail($to, $subject, $message, $headers)){
        echo "Takk for registreringen!";
    } else {
        echo "En feil oppstod!";
    }
} else {
    echo "Ugyldige tegn!";
}
?>
