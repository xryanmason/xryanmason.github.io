<?php

// set your e-mail address first, where you'll receive the notifications
$yourEmailAddress = "xryan.mason.7@gmail.com";
$emailSubject = "New Visitor on Webpage";
$emailContent = "Someone visited your webpage.";

// send the message
mail($yourEmailAddress, $emailSubject, $emailContent);

?>
