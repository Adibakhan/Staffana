<?php

    $to = 'khan.abid1992@gmail.com';
    $name = $_POST["name"];
    $from = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // $headers = "From : $from";
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Your name $from' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

    // print_r($to);
    // print_r($name);
    // print_r($from);
    // print_r($subject);
    // print_r($message);
    // print_r($headers);  
    
    
    // print_r(mail($to, $subject, $message, $headers));

    // exit();

    if(mail($to, $subject, $message, $headers)){
        echo "Mail Sent";
    }
    else {
        echo "Mail not Sent";
    }
   


    // require "vendor/autoload.php";

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;

    // $mail = new PHPMailer(true);

    // $mail->isSMTP();
    // $mail->SMTPAuth = true;

    // $mail->Host = "smtp.example.com";
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    // $mail->SMTPDebug = SMTP::DEBUG_CONNECTION;

    // $mail->Username ="you@example.com";
    // $mail->Username ="password";

    // $mail->setFrom($email, $name);
    // $mail->addAddress("neshatimammgs@gmail.com", "Neshat");

    // $mail->Subject = $subject;
    // $mail->Body = $message;

    // $mail->send();

    // echo "email Sent";


