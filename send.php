<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['s1'])){
   $cname=$_POST['name'];
   $cont=$_POST['cont'];
   $email=$_POST['email'];
   $add=$_POST['add'];
   $msg=$_POST['message'];
   $conn=mysqli_connect("localhost","root","","login1");
$q="insert into dataa values('$cname','$cont','$email','$add','$msg')";
mysqli_query($conn,$q);
require 'C:\xampp\htdocs\HealNEt\Append\php\Exception.php';
require 'C:\xampp\htdocs\HealNEt\Append\php\SMTP.php';
require 'C:\xampp\htdocs\HealNEt\Append\php\PHPMailer.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ganeshsalke02@gmail.com';                     //SMTP username
    $mail->Password   = 'nqzp kxaa ciim ikij';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ganeshsalke02@gmail.com', 'Mailer');
    $mail->addAddress('ganeshsalke616@gmail.com', 'Joe User');     //Add a recipient
    
    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "Sender-$email<br><br>SenderName-$cname<br><br>SenderAdd-$add<br><br>message-$msg<br>";
    
  
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contact-form {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
            max-width: 100%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f5f5f5;
            font-size: 16px;
            color: #333;
            transition: border-color 0.3s;
        }

        input:focus, textarea:focus {
            border-color: #4caf50;
        }

        textarea {
            resize: vertical;
            height: 120px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        h2 {
            color: #4caf50;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="contact-form">
        <h2 style="color:#e84545">Appointment Detail</h2>
        <form action="#" method="post">
            <!--for name-->
        <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" placeholder="Full Name" id="name" name="name" required>
            </div>

            <!--for age-->
            <div class="form-group">
            <label for="name">Contact:</label>
                <input type="number" id="cont" placeholder="Contact No" name="cont" required>
            </div>
            <!--for email-->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Email" name="email" required>
            </div>
            <!--address-->
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="email" placeholder="address" name="add" required>
            </div>
             <!--for msg-->
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" placeholder="Message" name="message" required></textarea>
            </div>

            <button type="submit" name="s1" style="color:white; background-color:#e84545;">Send Message</button>
        </form>
    </div>

</body>
</html>
