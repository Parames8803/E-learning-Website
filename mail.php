<?php
$sender_email = $_POST["email"];
$receiver = "parameswaran8803@gmail.com";
$subject = "Code-crack subscription";
$body = "Hi,I have been subscribed codecrack from $sender_email"  ;
$sender = "From:abc@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>