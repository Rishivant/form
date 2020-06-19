<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$email_from ='rishivantsingh9717@gmail.com';
$email_subject="new form submission";
$email_body="user name: $name .\n".
             "user_email: $email .\n".
              "user_message: $message .\n";

$to ="rishivantsingh.iimt@gmail.com";
$headers ="from: $email_from	\r\n";
$headers= "reply-to: $email \r\n";

		  
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");


?>