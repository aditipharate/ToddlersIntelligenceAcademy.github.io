<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'For Enquiry';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'aditipharate2@gmail.com'

$headers = "From: $email_form \r\n";

$headers .= "Reply_To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");



?>