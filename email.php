<?php
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit']) && $_POST['submit'] == 'submit')
{
	
	//Load Composer's autoloader
	require 'vendor/autoload.php';
	
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	
	try {
		//Server settings
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.mail.yahoo.com:25';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'menniablaise@yahoo.com';                     //SMTP username
		$mail->Password   = 'ddfnfaiyhphzrvnr';                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
		$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		// $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
	
		//Recipients
		$mail->setFrom('menniablaise@yahoo.com', 'Sonzie CV');
		$mail->addAddress('menniablaise@gmail.com', 'Megaaaa');     //Add a recipient
		// $mail->addAddress('ellen@example.com');               //Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');
	
		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
	
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'CV webiste Inquiry';
		$mail->Body    = '<b>Name:</b> '.$_POST['name'].'<br> <b>Email:</b> '.$_POST['email'].'<br> <b>Subject:</b> '.$_POST['subject'].'<br> <b>Message:</b> '.$_POST['message'].'';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		$mail->send();
		echo 'Message has been sent';
		?>
		<script>
    		// window.location = 'http://localhost:8088/sonzie.cv?status=good';
    		window.location = 'https://cv.sonzie.tech/?status=good';
		</script>
		<?php
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

}else{
    echo 'no';
}

?>