<?php

$jmeno = $_POST['name'];
$email = $_POST['email'];
$zprava = $_POST['message'];

$komu = "provizualizace@gmail.com";

$predmet = "Nová zpráva z webového formuláře";

$text = "
Nová zpráva z webu:

Jméno:
$jmeno

Email:
$email

Zpráva:
$zprava
";


$hlavicky = "From: web@provizualizace.cz\r\n";
$hlavicky .= "Reply-To: $email\r\n";


mail($komu, $predmet, $text, $hlavicky);


// přesměrování po odeslání
header("Location: dekujeme.html");
exit;

?>