<?php
require 'class.phpmailer.php';
require 'class.smtp.php';
  $to = 'ieeesciitmandi@students.iitmandi.ac.in';
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["comments"];
  $mail = new PHPMailer;
  $mail->setFrom('ieeesciitmandi@gmail.com');
  $mail->addAddress($to);
  $mail->Subject = 'Query from the website';
  $mail->Body = nl2br("Name: $name   \nEmail: $email   \nMessage: $message",false);
  $mail->IsSMTP();
  $mail->isHTML();
  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'ssl://smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Port = 465;

  // //Set your existing gmail address as user name
  $mail->Username = 'ieeesciitmandi@gmail.com';
  // //Set the password of your gmail address here
  $mail->Password = 'ieeemandi19'; //password is removed


  if(!$mail->send()) {
    echo 'Email is not sent.  ';
    echo 'Email error: ' . $mail->ErrorInfo;
  } else {
    echo "<script type='text/javascript'>alert('Your Query has been sent.');
    window.location.href='index.html';
    </script>";
  } 
 
?>
