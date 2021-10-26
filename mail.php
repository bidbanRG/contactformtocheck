<?php
//get data from form  
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$message= $_POST['message'];
$adress= $_POST['adress'];
$to = "bideshbanerjee444@gmail.com";
$email = "bideshbanerjee555@gmail.com"
$subject = "Mail From website";
$txt ="First Name = ". $fname . "\r\n Last Name  = " . $lname . "\r\n Adress  = " . $adress ."\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
   header("Location:DOM1.html");
?>
