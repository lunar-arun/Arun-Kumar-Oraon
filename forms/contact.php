<?php

if (isset($_POST['submit'])) {
  $mailto = 'arunkumaroraon2000@gmail.com';
  $from = $_POST['email'];
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $subject_confirm "Your Message Submitted Successfully"
  $message = "Client Name: ". $name. "Wrote the following message". "/n/n". $_POST['message'];
  $message_client "Dear ". $name."/n/n" ."Thank You for contacting us! We'll get back to you shortly.";
  $header = "From : ". $from;
  $header_client = "From : ". $mailto;
  $result = mail($mailto, $subject, $message, $header);
  $result_client = mail($from, $subject_confirm, $message_client, $header_client);

  if ($result) {
    echo '<script type="text/javascript">alert("Message was sent Successfully, We will get back to you shortly.");</script>';
  } else {
    echo '<script type="text/javascript">alert("Submission failed! Try again Later");</script>';
  }
}