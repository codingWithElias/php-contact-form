<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['name'])    &&
	isset($_POST['email'])   &&
    isset($_POST['subject']) &&
    isset($_POST['text'])) {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$text = $_POST['text'];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	$em = "Invalid email format";
    	header("Location: index.php?error=$em");
    }

    if (empty($name) || empty($subject) || empty($text) ) {
    	$em = "Fill out all required entry fields";
    	header("Location: index.php?error=$em");
    }

	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    $mail->isSMTP();                               
	    $mail->Host = 'smtp.gmail.com'; 
	    $mail->SMTPAuth   = true;
	    //Your Email
	    $mail->Username= '';
	    //App password
	    $mail->Password = ''; 
	    $mail->SMTPSecure = "ssl";          
	    $mail->Port       = 465;                                  
	    //Recipients
	    $mail->setFrom($email, $name);   
	    // your Email
	    $mail->addAddress(''); 

	    //Content
	    $mail->isHTML(true);                             
	    $mail->Subject = $subject;
	    $mail->Body    = "
	           <h3>Contact Form</h3>
			   <p><strong>Name</strong>: $name</p>
			   <p><strong>Email</strong>: $email</p>
			   <p><strong>Subject</strong>: $subject</p>
			   <p><strong>Message</strong>: $text</p>
	                     ";
	    $mail->send();
	    $sm= 'Message has been sent';
    	header("Location: index.php?success=$sm");
	} catch (Exception $e) {
	    $em = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    	header("Location: index.php?error=$em");
	}

}