<?php
if (isset($_POST["submit"])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = $_POST['subject']
$to = 'gjchen@ucdavis.edu'; 

$body = "From $name\n Email: $email\n Message:\n $message"; 

if (!$_POST['name']) {
    $errName = 'Please enter your name';
}

if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}

if (!$_POST['subject']) {
    $errSubject = 'Please enter a subject';
}

  if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errSubject) {
    if (mail ($to, $body)) {
        $result ='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
   
}
		
?>