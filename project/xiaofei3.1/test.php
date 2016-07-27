<?php
include("phpmailer/class.phpmailer.php");

class Mail
{
    private $host = 'smtp.yeah.net';
    private $port = 25;
    private $username = 'onlythen@yeah.net';
    private $password = '646691993';

    public function send($address, $info)
    {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPKeeyAlive = true;
        $mail->Host = $this->host;
        $mail->Port = $this->port;
        $mail->Username = $this->username;
        $mail->Password = $this->password;
        $mail->From = $this->username;
        $mail->FromName = '信息';
        $mail->Subject = '订单';
        $mail->Body = $info;
        $mail->AltBody = "新的订单";
        $mail->WordWrap = 50;
        $mail->addAddress($address);
        $mail->isHTML(true);
        return $mail->send();
    }
}

$info="您有新的订单";
$mail= new Mail();
$mail->send("642704194@qq.com",$info);

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
