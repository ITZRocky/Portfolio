<?php
//get data from form  
$name = $_POST['username'];
$email= $_POST['email'];
$subjectin = $_POST['subject'];
$message= $_POST['message'];
$to = "vrohith2710@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subjectin. "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>