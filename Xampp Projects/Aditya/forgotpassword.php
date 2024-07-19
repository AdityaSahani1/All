<?php
require("connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$reset_token)
{
    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");

    $mail = new PHPMailer(true);
    
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;                            
        $mail->Username   = 'sketchyotakuu@gmail.com'; 
        $mail->Password   = 'rfpj ryao axax tjue';           
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;
    
        $mail->setFrom('sketchyotaku@gmail.com', 'OtakuGallary');
        $mail->addAddress($email);

        $mail->isHTML(true);  
        $mail->Subject = 'Password Reset link from EventFusionHub';
        $mail->Body    = "We get a request from you to reset your password!<br>
        Click the link below:<br>
        <a href='http://localhost/NirajP/updatepassword.php?email=$email&reset_token=$reset_token'> Reset Password</a>
        ";
 
        $mail->send();
        return true;
    }
     catch (Exception $e){
        return "Error: " . $e->getMessage();
    }
}


if(isset($_POST['send-reset-link']))
{
    $query="SELECT * FROM `registered_users` WHERE `email`='$_POST[email]'";
    $result=mysqli_query($con,$query);
    if($result)
    {
       if(mysqli_num_rows($result)==1)
       {
       $reset_token=bin2hex(random_bytes(16));
       date_default_timezone_set('Asia/kolkata');
       $date=date("Y-m-d");
       $query="UPDATE `registered_users` SET `resettoken`='$reset_token',`resettokenexpire`='$date' WHERE `email`='$_POST[email]'";
       if(mysqli_query($con,$query) && sendMail($_POST['email'],$reset_token))
       {
        echo "
            <script>
            alert('Password Reset Link sent to mail');
            window.location.href='index.php';
            </script>
        ";
       }
       else
       {
        echo "
        <script>
         alert('Server Down! Try again later');
         window.location.href='index.php';
         </script>
        ";
       }
       }
       else
       {
        echo "
        <script>
         alert('Email not found');
         window.location.href='index.php';
         </script>
        ";
       }
    }
    else
    {
       echo "
        <script>
         alert('cannot run query');
         window.location.href='index.php';
         </script>
        ";
    }
}

?>