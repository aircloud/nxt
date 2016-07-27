/**
 * This example shows sending a message using PHP's mail() function.
 */

<?php
    /**
     * Simple example script using PHPMailer with exceptions enabled
     * @package phpmailer
     * @version $Id$
     */

    require 'phpmailer/class.phpmailer.php';

    try {
        $mail = new PHPMailer(true); //New instance, with exceptions enabled

        $body              = file_get_contents('contents.html');
        $body              = preg_replace('/\\\\/','', $body); //Strip backslashes

        $mail->IsSMTP();                           // tell the class to use SMTP
        $mail->SMTPAuth    = true;                  // enable SMTP authentication
        $mail->Port        = 25;                // set the SMTP server port
        $mail->Host        = "smtp.yeah.net"; // SMTP server
        $mail->Username    = "onlythen@yeah.net";     // SMTP server username
        $mail->Password    = "646691993";            // SMTP server password

        $mail->IsSendmail();  // tell the class to use Sendmail

        $mail->AddReplyTo("646691993@qq.com","xxxx");
        $mail->From        = "onlythen@yeah.net";
        $mail->FromName    = "DJB";

        $to = "642704194@qq.com";

        $mail->AddAddress($to);

        $mail->Subject   = "First PHPMailer Message";

        $mail->AltBody     = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $mail->WordWrap    = 80; // set word wrap

        $mail->MsgHTML($body);

        $mail->IsHTML(true); // send as HTML

        $mail->Send();
        echo 'Message has been sent.';
    } catch (phpmailerException $e) {
        echo $e->errorMessage();
    }
//    ?>