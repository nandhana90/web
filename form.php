<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];


$from = 'forms.infysolution.com' 
$to = 'nandhana3905@gmail.com';
$body= "First Name:$fname.\n";
        "Last Name:$lname.\n";
        "Mail Id:$ename.\n";
        "Message:$message.\n";

$header = "From :".$from.
     "Reply-To :".$email;
mail($to,$subject,$body,$headers); 
 header("Location:contact.html")
?>
