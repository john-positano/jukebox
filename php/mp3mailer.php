<?php

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);

//$mail->SMTPDebug = 4;                               // Enable verbose debug output


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                          // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'thetmcmarketingteam@gmail.com';                 // SMTP username
$mail->Password = 'tmcmarketing';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;  

$emailer = $_POST['email'];
$file = $_POST['file'];
$filename = preg_split("/MP3\//", $file);                
              
$mail->setFrom('IT@thetmcteam.com', 'IT');
$mail->addAddress($emailer, 'Recording');
$mail->AddStringAttachment(file_get_contents($file), $filename[1]);    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Recording: ' . $filename[1];

$mail->Body = "<table><tr style='text-align: center'>Recording Attached</tr><tr><audio controls><source src='" . $file . "' type='audio/mpeg'></audio></tr></table>";
$mail->AltBody = "Recording Attached";
if ($mail->Send()) {

    echo "{'ok' : 'ok'}";

}



?>
