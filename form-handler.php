<?php
$name = $_post['name'];
$visitor = $_post['email']
$subject = $_post['subject']
$message = $_post['message']

$email_form = 'thapamahendra671@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name. \n".
              "User Email: $visitior_email. \n".
              "subject : $subject. \n".
              "User Message: $message. \n";

$to = 'thapamahendra671@gmail.com';

$headers = "Form: $email_form \r\n";

$headers = "Replay-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html")



?>