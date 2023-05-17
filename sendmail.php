<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHtml(true);

$mail->setFrom('itkse89@gmail.com');

$mail->addAddress('sergei-21s@mail.ru');

$mail->Subject = 'Заявка с сайта';

$body = '<h1>Заявка</h1>
<br>
<p><strong>Имя:</strong> '.$_POST['name'].'</p>
<br>
<p><strong>email:</strong> '.$_POST['email'].'</p>
<br>
<p><strong>телефон:</strong> '.$_POST['tel'].'</p>';

$mail->Body = $body;

if (!$mail->send()) {
    $message = 'vsdv';
} else {
    $message = 'erererererererererererererb';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);