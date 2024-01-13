<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 's.hakasifamador@usm.edu.ph';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User message: $message.\n";

$to = 's.hakasifamador@usm.edu.ph';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers)

header("Location: contact.html")
?>