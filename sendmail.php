<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHtml(true);

$mail->setFrom('itkse@gmail.com');

$mail->addAddress('grushapark@yandex.ru');

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
?>