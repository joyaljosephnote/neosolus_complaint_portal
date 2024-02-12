<?php

$name = $_POST['w3lName'];
// $subject = "Complaint Registration";
$mobileNumber = $_POST['w3lMobileNumber'];
$senderEmail = $_POST['w3lSender'];
$assetId = $_POST['w3lassetId'];
$message = $_POST['w3lMessage'];

$mailheader = "Form:".$name."<".$senderEmail.">\r\n"

$recipient = "neosolus2023@gmail.com";

mail($recipient, $mobileNumber, $message, $mailheader)

or die("Error!");

echo "Email sent";

?>