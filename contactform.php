<?php
  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messageform = $_POST['message'];

    $to = "wishyouthnetwork@gmail.com"; // TODO: CHANGE TO ACTUAL NAME
    $subject = "Wish Youth - New Contact Form Message";
    $message = "<strong>Name</strong><br>" . $name . "<br><br><strong>Email</strong><br>" . $email . "<br><br><strong>Message</strong><br>" . $messageform;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to,$subject,$message,$headers);
    header("Location: index.php?mailsent");
  }
?>
