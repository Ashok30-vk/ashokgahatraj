<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$comment= $_POST['comment'];

$email_from='ashokgahatraj.com.np';

$email_subject ='New Form Submission'
$email_body="User Name: $name.\n".
             "User Email: $visitor_email.\n"
             "User Message:$comment.\n";

$to='gahatrajashok125@gmail.com';

$headers="From:$email_from\r\n";
$headers.="Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:about.html")
?>
