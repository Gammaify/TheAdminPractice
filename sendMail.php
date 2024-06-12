<?php
function strip_crlf($string)
{
    return str_replace("\r\n", "", $string);
}
 $firstName = $_POST["firstName"];
 $surName = $_POST["lastName"];
 $email = $_POST["email"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];
 $toEmail = "lisa@theadminpractice.co.uk";

 $firstName = strip_crlf($firstName);
 $surName = strip_crlf($surName);
 $email = strip_crlf($email);
 $subject = strip_crlf($subject);
 $message = strip_crlf($message);

$body = "From: $firstName $surName\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit']) {
    if (mail ($toEmail, $subject, $body, $email)) { 
        $success = "Message successfully sent";
    } 
    else {
        $success = "Message Sending Failed, try again";
    }
}
?>