<?php


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['subject'];

//validate first
if(empty($name)||empty($email)){
    echo "Name and email are mandatory!";
    exit;
}

$email_from = 'nickquispel@outlook.com';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n".
        "email address: $email\n".
        "Here is the message:\n $message";

$to = "nickquispel@outlook.com"        ;
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);
//done.





