<?php


$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from = 'info@yourwebsite.com';

#write ur domain name for email address after u purchase #
    

$email_subject = 'New form submission';
    
$email_body = "User name : $name.\n".
               "User email : $visitor_email.\n".
                "subject : $subject.\n".
                  "User message : $message.\n";

$to = 'rlohitkarthik@gmail.com'
    
$headers="Form: $email_from \r\n";

$headers = "Reply-To : $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers );

header("Location: contact.html");

?>