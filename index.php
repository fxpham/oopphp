<?php
  // Swift Mailer Library
  require_once './vendor/swiftmailer/lib/swift_required.php';

  // Mail Transport
  $transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
      ->setUsername('username@gmail.com') // Your Gmail Username
      ->setPassword('my_secure_gmail_password'); // Your Gmail Password

  // Mailer
  $mailer = Swift_Mailer::newInstance($transport);

  // Create a message
  $message = Swift_Message::newInstance('Wonderful Subject Here')
      ->setFrom(array('sender@example.com' => 'Sender Name')) // can be $_POST['email'] etc...
      ->setTo(array('receiver@example.com' => 'Receiver Name')) // your email / multiple supported.
      ->setBody('Here is the <strong>message</strong> itself. It can be text or <h1>HTML</h1>.', 'text/html');

  // Send the message
  if ($mailer->send($message)) {
      echo 'Mail sent successfully.';
  } else {
      echo 'I am sure, your configuration are not correct. :(';
  }
?>