<?php
$name = $_POST['Name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from=  'sabahat@gmail.com';

$email_subject=  'new form submission';


$email_body=  "User Name= $name.\n".
               "User Email= $visitor_emaail.\n".
               "Subject= $subject.\n".
               "Message= $message.\n";
  $to=         'abc@gmail.com';
  $headers=     "From: $email_from\r\n";
  $headers .=   "Reply-to:$visitor_email\r\n ";
               email( $to,$email_subject,$email_body, $headers);
               header("Location: contact.html");
?>