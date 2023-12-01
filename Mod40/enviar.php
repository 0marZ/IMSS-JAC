<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
         
		 
    $mail->SMTPOptions = array(
	'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
	'allow_self_signed' => true
	)
	);
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
	$mail->CharSet = 'UTF-8';
    $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'SEMOD40@outlook.com';                     //SMTP username
    $mail->Password   = 'afiliacionycobranza-mod40';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('SEMOD40@outlook.com', 'Sistema MOD 40');
    $mail->addAddress('damarisrosete123@gmail.com', 'Damaris L.');     //Add a recipient
   $mail->addAddress('L19010311@orizaba.tecnm.mx', 'Bertha.'); 
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('img/img1.png');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recordatorio del sistema MOD40';
    $mail->Body    = 'Te recordamos que se encuentra disponible la informacion mensual de los audeudos de la modalidad 40. <br>Te solicitamos la consultes.	<br> Sistema Mod40-IMSS<br><br><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0eEJw3SENlAFrWqZnEf5mZMrlKGvvq7-F2Q&usqp=CAU" width="300" height="150"><br><br>"';
    $mail->send();
    echo '<script>
        alert("Correo enviado");
		window.location.href="correos.php";
 </script>';
} catch (Exception $e) {
    echo "Mensaje con Error: {$mail->ErrorInfo}";
}
