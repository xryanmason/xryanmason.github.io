<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
<?php

// set your e-mail address first, where you'll receive the notifications
$yourEmailAddress = "xryan.mason.7@gmail.com";
$emailSubject = "New Visitor on Webpage";
$emailContent = "Someone visited your webpage.";

// send the message
mail($yourEmailAddress, $emailSubject, $emailContent);

?>
?>

</body>
</html>
