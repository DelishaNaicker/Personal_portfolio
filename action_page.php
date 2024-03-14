<?php 
// if "email" variable is filled out, send email
if (isset($_REQUEST['email'])) {

//Email information
$to = "delisha.ann.naicker@gmail.com";
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

//Send email
mail($to, $subject, $message, "From:" . $email);

//Email response
echo "Thank you for contacting us!"; }

?>