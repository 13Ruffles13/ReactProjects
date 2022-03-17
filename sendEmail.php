<?php

//GetData
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$number = $_POST['mobile'];

$to = "alvaradojrrafael@gmail.com";

$subject = "Mail from onTheLow";
$txt = "Name = ". $name . "\r\n Email = ". $email . "\r\nMessage =" . $message ."
    \r\n Mobile number = ". $number;
$headers = "From: noreply@yoursite.com"  . "\r\n" .
"CC: somebodyelse@example.com";
if($email != NULL){
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:email.html");
?>