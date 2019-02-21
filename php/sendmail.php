<?php
    require_once('phpmailer/PHPMailerAutoload.php');

    $mail = new PHPMailer();
    $mail ->isSMTP();
    //$mail ->SMTPAuth();
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = 'smtp.gmail.com';
    $mail ->Port = '465';
    $mail ->isHTML = true;
    $mail ->Username = 'testphp2135@gmail.com';
    $mail ->Password = 'azerty1-';
    $mail ->SetFrom('testphp2135@gmail.com');
    $mail ->Subject = 'Hi';
    $mail ->Body = 'body';
    $mail ->AddAddress('testphp2135@gmail.com');
    
    $mail ->Send();
        
    if ($mail ->Send())
    {
        echo "Yes";
    }

    if (!$mail ->Send())
    {
        echo "No";
    }
?>