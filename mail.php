<?php
	#Standard email info
	$to = $_POST['to']; 
	$subject = $_POST['subject']; 
	$msg=$_POST['message'];
	$file_name=$_FILES['file']['tmp_name'];
	$file_type=$_FILES['file']['type'];

	
	#This variable will be used when declaring the "boundaries"
	#for the different sections of the email
	$boundary = md5(date('r', time()));

	#Initial Headers 
	$headers = "MIME-Version: 1.0\r\n"; // <- the "\r\n" indicate a carriage return and newline, respectively
	$headers .= "From: <dilipagarwal142kk@gmail.com>\r\n";
	$headers .= "Content-Type: multipart/mixed; boundary=" . $boundary . "\r\n"; 
	# This is saying the there will be more than one (a "mix") of Content Types in this email.
	# The "boundary" value will indicate when each content type will start

#First Content Type
 
	$message = "\r\n\r\n--" . $boundary . "\r\n"; 
	# This indicates that I'm going to start
	# declaring headers specific to this section of the email. 
	# MAKE SURE there's only ONE(1) "\r\n" between the above boundry and the first header below (Content-Type)
	$message .= "Content-type: text/plain; charset=\"iso-8859-1\"\r\n";
	# Here I'm saying this content should be plain text
	$message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";

	# Body of the email for the headers I just declared
	$message .= $msg."\r\n";
	$message .= "";
 

#Second Content Type
	$message .= "\r\n\r\n--" . $boundary . "\r\n"; 
	# This idicates that I'm going to start 
	# declaring some more headers for the content beslow
	# MAKE SURE there's only ONE(1) "\r\n" between the above boundry and the first header below (Content-Type)
	
	$message .= "Content-type:".$file_type."\r\n"; # <- Here I'm saying that this Content Type is for a JPEG image
	$message .= "Content-Transfer-Encoding: base64\r\n"; # <- this is saying that this section's content will be base64 Encoded
	$message .= "Content-Disposition: attachment; filename=".$file_name."\r\n"; 
	# This is saying the content below should be an attachment and gives it a file name

	# The base64_encode below is necessary because this is a file. 
	$message .= base64_encode(file_get_contents($file_name)); 
	$message .= "\r\n\r\n--" . $boundary . "--"; 
	# This indicates the end of the boundries. Notice the additional "--" after the boundry's value.

	# Send the email using "mail()".
	$mail_sent = @mail($to, $subject, $message, $headers); 

	echo $mail_sent ? "<script>alert('Mail Sent')</script>" :"<script>alert('Mail Failed')</script>";
	
	echo $mail_sent ? "<script>window.open('https://gmail.com')</script>" :"<script>window.open('https://google.com')</script>"; ?>
	
	