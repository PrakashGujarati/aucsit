<?php
$to = "prakash@vsc.edu.in";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: gujarati.android@gmail.com" . "\r\n" .
"CC: gujaratiprakash@gmail.com.com";

mail($to,$subject,$txt,$headers);
?>
