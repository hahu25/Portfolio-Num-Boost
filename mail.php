<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php'

if(isset(¤_POST["send"])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'huynh52xd@gmail.com';
    $mail->Password = '123456';  
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('huynh52xd@gmail.com');

    $mail-> addAddress ($_POST["email"]);

    $mail->isHTML(true); 
    $mail->Subject = $_POST ["subject"];
    $mail->Body = $_POST ["message"];

    $mail -> send();
    echo 
    <script>
    alert('Message has been sent'); 
    document.location.href = 'index.php';
    </script>;
}
?>
