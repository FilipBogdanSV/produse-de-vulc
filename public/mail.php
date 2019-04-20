<?php
require 'PHPMailerAutoload.php';

$email = $_POST["email"];
$numar = $_POST["numar"];
$nume = $_POST["nume"];

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'produsedevulcanizare@gmail.com';                 // SMTP username
$mail->Password = 'parolagrea1';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('produsedevulcanizare@gmail.com');
$mail->addAddress('bogdore23@gmail.com');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Persoana de contact produsedevulcanizare.ro';
$mail->Body    = 'Domnul <b>'.$nume.'</b>'.'doreste sa va contacteze <br>'.'Numar de telefon: '.$numar.' <br> '.'Email: '.$email;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}