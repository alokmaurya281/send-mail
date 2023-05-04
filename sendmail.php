<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);


	$mail->SMTPDebug = 2;									
	$mail->isSMTP();										
	$mail->Host	 = 'HOSTNAME';				
	$mail->SMTPAuth = true;							
	$mail->Username = 'USERNAME';				
	$mail->Password = 'PASSWORD';					
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 2525;

	$mail->setFrom('SENDER EMAIL', 'SENDER NAME');		
	$mail->addAddress('RECIPIENT ADDRESS');
	
	$mail->isHTML(true);								
	$mail->Subject = 'Subject';
	$mail->Body = 'HTML message body in <b>bold</b> ';
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	
    if($mail->send()){
        echo "Mail has been sent successfully!";

    }else{
	

	echo "Message could not be sent. ";
}

?>
