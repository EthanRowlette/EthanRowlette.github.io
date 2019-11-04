<?php
 if (ifset()$_POST['submit']) {
   $name = $_POST['name'];
   $subject = $_POST['subject'];
   $mailFrom = $_POST['mail'];
   $message = $_POST['message'];

   $mailTo = "https://formspree.io/xoqaovaa"
   $headers = "From: ".$mailFrom;
   $txt = "you have recieved an E-mail from ".$name.".\n\n".$message;


   mail($mailTo, $subject, $txt, $headers);
   header("Location: contactForm.php?mailsend");

 }
 ?>

