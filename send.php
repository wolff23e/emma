<?php
$userName  = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userMessage = $_POST['message'];
$formcontent=" From: $userName \n Email: $userEmail \n Message: $userMessage";
$recipient = "wolff23e@mtholyoke.edu";
$subject = "Contact Form";
$mailheader = "From: $userEmail \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
