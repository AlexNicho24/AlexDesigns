<?php
  $fname = $_POST[firstname];
  $lname = $_POST[lastname]
  $visitor_email = $_POST[email];
  $message = $_POST[questions];
  $number = $_POST[phone];

  $email_subject = "New Contact from Portfolio";

  $email_body = "User Name: $fname $lastname\n".
                  "User Email: $visitor_email.\n"
                    "User Message: $message.\n"
                    "User Phone Number: $phone.";

  $to = "nicholasalex50@gmail.com";

  $headers = "From: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: index.html");

 ?>
