<?php
require_once './vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Get form value;

$to = $_POST['to'];
$subject = $_POST['subject'];
$body = $_POST['body'];

// Config smtp
$from = 'Email_nguoi_gui';
$display_name = 'Ten_nguoi_gui';
$password = "Mat_khau";
//
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = $from;
$mail->Password   = $password;

// Noi dung email
$mail->IsHTML(true);
$mail->AddAddress($to);
$mail->SetFrom($from, $display_name);
$mail->Subject = $subject;
$content = $body;

$mail->MsgHTML($content);
//Gui mail
if(!$mail->Send()) {
  echo "Error while sending Email.";
//   var_dump($mail);
} else {
  echo "Email sent successfully";
}
?>