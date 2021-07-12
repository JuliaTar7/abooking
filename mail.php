<?php 
session_start();
require_once('booking.php');
require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$email = $_POST['email'];

$mail->isSMTP();                                     
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                               
$mail->Username = 'testmail_abooking@mail.ru'; 
$mail->Password = 'Abooking2021'; 
$mail->SMTPSecure = 'ssl';                         
$mail->Port = 465; 

$mail->setFrom('testmail_abooking@mail.ru'); 
$mail->addAddress('info@itspro.by');      //пока уходит только на Ваш ящик

$mail->isHTML(true);                                  

$mail->Subject = 'Бронирование';
$mail->Body    = '' .$name . ' забронировал(-а) апартаменты, почта пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>