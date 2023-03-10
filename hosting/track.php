<?php
$to = "fakeemail.p.once@gmail.com";
$subject = "Website visit";
$message = "Someone visited your website!";
$headers = "From: yourwebsite@example.com";

// Send email
mail($to, $subject, $message, $headers);

// Write to a file to keep track of the number of visits
$count = file_get_contents('counter.txt');
file_put_contents('counter.txt', ++$count);
?>