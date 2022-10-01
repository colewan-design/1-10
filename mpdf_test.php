<?php
// Create instance of Swift_Attachment with our PDF file
$attachment = new Swift_Attachment($content, 'filename.pdf', 'application/pdf');

$message = Swift_Message::newInstance()
  ->setSubject('Your subject')
  ->setFrom(array('john@doe.com' => 'John Doe'))
  ->setTo(array('cts.colewan@gmail.com', 'cts.colewan@gmail.com' => 'A name'))
  ->setBody('Here is the message itself')
  ->attach($attachment);

$transport = Swift_MailTransport::newInstance();

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Send the created message
$mailer->send($message);

// Then, you can send PDF to the browser
$mpdf->Output($filename ,'I');