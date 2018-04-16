<?php
require 'PHPMailerAutoload.php';

/*$mail = new PHPMailer;
$mail->isSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "maint.zakaz@gmail.com";
$mail->Password = "MMaint112233";
$mail->setFrom('savezhanov.d@maint.kz');
$mail->addAddress('savezhanov.d@maint.kz', 'Maint Company');
$mail->isHTML(true);*/

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->From = "info@maint.kz";
$mail->FromName = "Maint.kz";
$mail->addAddress('info@ast-legal.kz', 'Maint Company');

$mail->Subject = 'Заявка на обратный звонок';
$mail->Body    = "
    <html>
			<head>
				<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
			</head>
			<body>
				Имя: ".$_POST['name']."<br/>
				Телефон: ".$_POST['phone']."<br/>				
			</body>
	</html>";
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
    exit("Mailer Error: " . $mail->ErrorInfo);
}
?>
