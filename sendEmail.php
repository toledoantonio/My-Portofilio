<?php

  $name = $_POST['name'];
  $email= $_POST['email'];
  $subject= $_POST['subject'];
  $message= $_POST['message'];

  $to = "itssaifurrehman@gmail.com";
  $subject = "Email from Your Portfolio Website";
  $txt= "Full Name = ".$name. "\r\n  Email = " .$email. "\r\n  Subject = " . $subject . "\r\n  Address = " . $message . "\r\n  Message = " . $message . "";
  $headers = "From: itssaifurrehman@gmail.com" ;

  mail($to,$subject,$txt,$headers);

  header("Location:index.html");

  ?>
