<?php
if($_POST){
$subject = "Creative Webs Tech Enquirey";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$to = "creativerampm@gmail.com";
$headers = "From: Creative Webs  <creativewebstech.com>";
$body="Please find the new enquirey details below \n Name : $name \n Email : $email \n Phone : $phone \n Message : $message";
mail($to,$subject,$body,$headers);
//echo '<script>alert("Thanks for reaching us. We will get back to you soon")</script>';
header('Location:thank-you.php');
}
?>
