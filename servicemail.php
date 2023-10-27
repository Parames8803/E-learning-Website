<?php
$name = $_POST["name"];
$email=$_POST["email"];
$mess = $_POST["message"];
$to="parameswaran8803@gmail.com";
$header="Get a quote from service page";
$subject= "$name,$mess";
$from = "From: $email";

if(mail($to,$subject,$header,$from)){
    echo ("Success");
}
else{
    echo("not send");
}
?>