<?php
 

  // Replace contact@example.com with your real receiving email address
  $first_name="First Name : ".$_POST['name']."<br>";
$your_email="Your Email :".$_POST['email']. "<br>";
$subject="subject :".$_POST['subject']. "<br>";
$your_message="message :".$_POST['message']. "<br>";
$message = "
 \n $first_name \n 
 \n $your_email \n 
 \n $subject \n 
 \n $your_message \n
";
echo $message;
include "PHPMailer_5.2.4/class.phpmailer.php"; 


$mail = new PHPMailer;
 $mail->isSMTP();                                      
 $mail->Host = 'smtp.gmail.com';

 $mail->SMTPAuth = true;          
 $mail->Username = 'nikolamislav@gmail.com';
 $mail->Password = 'Pl1sk4863fD2';           
 $mail->SMTPSecure = 'tls';              
 $mail->Port = 587;                      
 $mail->setFrom('nikolamislav@gmail.com', 'Mailer');
 $mail->addAddress($your_email, 'Name');
 $mail->addAttachment('fileaddress');       
 $mail->isHTML(true);                              
 $mail->Subject = 'Here is the subject';
 $mail->Body    = $message;
 $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

 if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
    echo 'Message has been sent';
 }
?>
