<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
if (!function_exists("sendEmail")) {
	function sendEmail($to, $subject, $message, $reply_to = "", $name = "", $setFrom = "", $setFromName = "")
	{

		if (empty($to))
			return TRUE;
		if (!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/", $to))
			return TRUE;
		require_once  "Mail/Mail/PHPMailerAutoload.php";
		$mail = new PHPMailer();

		try {
			$CI = &get_instance();
			$CI->config->load('email_settings');
			//Server settings
			$mail->SMTPDebug = 1; // Enable verbose debug output

			$mail->Host = 'localhost';
			$mail->SMTPAuth = false;
			$mail->SMTPAutoTLS = false;
			$mail->Port = 25;

			//Recipients
			if (empty($setFrom))
				$setFrom = 'support@snowyglow.com';
			if (empty($setFromName))
				$setFromName = 'Snowy Glow Website';
			$mail->setFrom($setFrom, $setFromName);
			$mail->addAddress($to);     // Add a recipient
			if (!empty($reply_to))
				$mail->addReplyTo($reply_to, $name);
			// $mail->addCC('cc@example.com');
			// $mail->addBCC('annotation.noreply@gmail.com');

			// Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			// Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = $subject;
			$mail->Body    = $message;
			$mail->AltBody = 'Sorry This Mail Does Not Support HTML Contents';
			$res = $mail->send();

			unset($mail);
			if ($res)
				return TRUE;
			exit($res);
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			return FALSE;
		}
	}
}
