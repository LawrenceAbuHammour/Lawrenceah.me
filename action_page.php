<?php $name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Comment'];
$formcontent="From: $name \n Subject: $subject";
$recipient = "lawrenceabuhammour@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("I'm sorry! That doesn't seem right");
echo "Thank You For Submitting! I will get back to you as soon as I can!";
?>
