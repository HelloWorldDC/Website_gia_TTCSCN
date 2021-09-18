<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer-master/src/PHPMailer.php";
require_once "PHPMailer-master/src/SMTP.php";
require_once "PHPMailer-master/src/Exception.php";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'baomat.noreply@gmail.com';                     //SMTP username
    $mail->Password   = 'A1234567890.';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('baomat.noreply@gmail.com', "'Google'");
    // $mail->addAddress('test-2f30db@test.mailgenius.com', 'Joe User');     //Add a recipient
    $mail->addAddress('dang23479@gmail.com');               //Name is optional

    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->CharSet = "UTF-8";
    $mail->Subject = 'Cảnh báo đăng nhập';
    $mail->Body    = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="">
            <div class="aHl"></div>
            <div id=":o7" tabindex="-1"></div>
            <div id=":nw" class="ii gt">
                <div id=":nv" class="a3s aiL msg6171207600509048180">
                    <u></u>
                    <div style="margin:0;padding:0" bgcolor="#FFFFFF">
                        <table width="100%" height="100%" style="min-width:348px" border="0" cellspacing="0" cellpadding="0"
                            lang="en">
                            <tbody>
                                <tr height="32" style="height:32px">
                                    <td></td>
                                </tr>
                                <tr align="center">
                                    <td>
                                        <div>
                                            <div></div>
                                        </div>
                                        <table border="0" cellspacing="0" cellpadding="0"
                                            style="padding-bottom:20px;max-width:516px;min-width:220px">
                                            <tbody>
                                                <tr>
                                                    <td width="8" style="width:8px"></td>
                                                    <td>
                                                        <div style="border-style:solid;border-width:thin;border-color:#dadce0;border-radius:8px;padding:40px 20px"
                                                            align="center" class="m_6171207600509048180mdv2rw"><img
                                                                src=""
                                                                width="74" height="24" aria-hidden="true"
                                                                style="margin-bottom:16px" alt="Google" class="CToWUd">
                                                            <div
                                                                style="font-family:Google Sans,Roboto,RobotoDraft,Helvetica,Arial,sans-serif;border-bottom:thin solid #dadce0;color:rgba(0,0,0,0.87);line-height:32px;padding-bottom:24px;text-align:center;word-break:break-word">
                                                                <div style="font-size:24px">Thiết bị mới đã đăng nhập vào
                                                                    tài khoản của&nbsp;bạn </div>
                                                                <table align="center" style="margin-top:8px">
                                                                    <tbody>
                                                                        <tr style="line-height:normal">
                                                                            <td align="right" style="padding-right:8px"></td>
                                                                            <td>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div
                                                                style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;font-size:14px;color:rgba(0,0,0,0.87);line-height:20px;padding-top:20px;text-align:center">
                                                                Ai đó vừa đăng nhập vào Tài khoản Google của bạn trên một
                                                                thiết bị Windows mới. Chúng tôi gửi cho bạn email này để đảm
                                                                bảo rằng người đó chính là bạn.<div
                                                                    style="padding-top:32px;text-align:center"><a
                                                                        style="font-family:Google Sans,Roboto,RobotoDraft,Helvetica,Arial,sans-serif;line-height:16px;color:#ffffff;font-weight:400;text-decoration:none;font-size:14px;display:inline-block;padding:10px 24px;background-color:#4184f3;border-radius:5px;min-width:90px"
                                                                        href="" target="_blank" >Kiểm
                                                                        tra hoạt động</a>
                                                                    
                                                                    
                                                                    </div>
                                                            </div>
                                                            <div
                                                                style="padding-top:20px;font-size:12px;line-height:16px;color:#5f6368;letter-spacing:0.3px;text-align:center">
                                                                Bạn cũng có thể xem hoạt động bảo mật tại<br><a
                                                                    style="color:rgba(0,0,0,0.87);text-decoration:inherit">https://myaccount.google.com/<wbr>notifications</a>
                                                            </div>
                                                        </div>
                                                        
                                                    </td>
                                                    <td width="8" style="width:8px"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr height="32" style="height:32px">
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id=":ob" class="ii gt" style="display:none">
                <div id=":oc" class="a3s aiL "></div>
            </div>
            <div class="hi"></div>
            </div>
    </body>
    </html>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
