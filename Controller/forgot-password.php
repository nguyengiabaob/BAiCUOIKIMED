<?php
include "../vendor/phpmailer/phpmailer/src/PHPMailer.php";
include "../vendor/phpmailer/phpmailer/src/Exception.php";
include "../vendor/phpmailer/phpmailer/src/OAuth.php";
include "../vendor/phpmailer/phpmailer/src/POP3.php";
include "../vendor/phpmailer/phpmailer/src/SMTP.php";
use \phpmailer\phpmailer\phpmailer;
use \phpmailer\phpmailer\SMTP;
use \phpmailer\phpmailer\Exception;
// require '../vendor/phpmailer/phpmailer/src/Exception.php';
// require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require '../vendor/phpmailer/phpmailer/src/SMTP.php';

require '../vendor/autoload.php';

$error="";
include "../public/connect.inc";
if(isset($_POST['txtemail']))
{
    $email=$_POST['txtemail'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $error="<span style='margin-left: 5px; color: #ff4747'><i style='margin-right:10px' class='fas fa-exclamation-triangle'>Email không đúng định dạng</i></span>";
        
     
    }
    else
    {  
        $sql="select Email from tblusers where Email='$email'";
        $rs= mysqli_query($con,$sql);
        if(mysqli_num_rows($rs)>0)
        {

        
        $mail = new phpmailer(true);
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;      
        $mail->isSMTP();
        $mail->Host= 'smtp.gmail.com';   
        $mail->SMTPAuth   = true;    
        $mail->SMTPAutoTLS = false; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
        $mail->Port = 587; 
        $mail->Username="choigamesss000@gmail.com";
        $mail->Password="01272515395";
        $mail->Subject="Password retrieval";
        $mail->setFrom("choigamesss000@gmail.com");
        $mail->Body="This is password";
        $mail->addAddress("$email");
        if($mail->send())
            {
                echo " Email sent..";

            }
        else
        {
            echo "Error";
        }
        $mail->smtpClose();
    }
    else
    {
        $error="<span style='margin-left: 5px; color: #ff4747'><i style='margin-right:10px' class='fas fa-exclamation-triangle'>Email không tồn tại</i></span>";
    }

    }
}

?>