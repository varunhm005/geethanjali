<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/PHPMailer/src/Exception.php';
require './PHPMailer/PHPMailer/src/PHPMailer.php';
require './PHPMailer/PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'interdynamicsservices@gmail.com';
    $mail->Password   = 'hixc irjg ntfg jjfx';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $name = $_POST['name'];
    $phone = $_POST['mobileNumber'];


    //Recipients
    $mail->setFrom("interdynamicsservices@gmail.com", 'Varun');
    $mail->addAddress('interdynamicsservices@gmail.com', 'Varun');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Order';
    $mail->Body    = "<html>
                       <head>
                         <title>HTML email</title>
                       </head>
                       <body>
                         <span style='font-size:15px' > Name: <span style='font-size:12px' >  $name </span> <br>
                          Phone: <span style='font-size:12px' >$phone</span> <br>
                          </span>
                       </body>
                    </html>";

    $mail->send();
    $destinationURL = 'index.html?messageSend=1';

    // Perform the redirect
    // header('Location: ' . $destinationURL);
    echo '1';
} catch (Exception $e) {
    echo '0';
}
