<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['emailaddress'];
$number= $_POST['mobile'];
$message= $_POST['message'];

$to = "contact.magixstudio@gmail.com";

$subject = "Mail From Website";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "
\r\n Mobile number =". $number;

$headers = "From: noreply@magixstudio.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>