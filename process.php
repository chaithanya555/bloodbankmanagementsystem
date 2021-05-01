<?php
session_start();
$rndno=rand(100000, 999999);//OTP generate
$to=$_SESSION['email'];
require 'PHPMailer-master/PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer;
$mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'blooddonar2019@gmail.com';                     // SMTP username
    $mail->Password   = 'chaithu123';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('blooddonar2019@gmail.com', 'Blood Bank');
    $mail->addAddress($to, $_SESSION['name']);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('blooddonar2019@gmail.com', 'Blood Bank');

    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);// Set email format to HTML
    $mail->Subject = 'Verification of Email';
    $mail->Body    = 'OTP is: <b>'.$rndno.'</b>';
    $mail->SMTPOptions=array('ssl'=>array(
    'verify_peer'=>false,
    'verify_peer_name'=>false,
    'allow_self_signed'=>false
  ));

    $mail->send();
    $_SESSION['otp']=$rndno;
    header( "Location: otp.php" );
if(isset($_POST['btn-save']))
{
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['otp']=$rndno;
header( "Location: otp.php" ); 
} ?>