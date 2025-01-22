<?php
// Je verifie si le formulaire a été soumis
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit']))
{
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['sujet']) && !empty($_POST['message']))
    {
        // Je charge PHPmailer
        require 'vendor/autoload.php';
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                                  //Enable verbose debug output
            $mail->isSMTP();                                                        //Send using SMTP
            $mail->Host       = 'dwwm2425.fr';                                      //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                               //Enable SMTP authentication
            $mail->Username   = 'contact@dwwm2425.fr';                              //SMTP username
            $mail->Password   = '!cci18000Bourges!';                                //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                        //Enable implicit TLS encryption
            $mail->Port       = 465;                                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('contact@dwwm2425.fr', strip_tags($_POST['prenom']). ' ' . strip_tags($_POST['nom']));
            $mail->addAddress('ilansenouci@gmail.com', 'Toujours Ilan SENOUCI');                                                    //Add a recipient
            $mail->addAddress('imran.costanzo@campuscci18.fr', 'Salope salope salope');                                             //Name is optional
            $mail->addReplyTo(strip_tags($_POST['email']), strip_tags($_POST['prenom']). ' ' . strip_tags($_POST['nom']));
            // $mail->addCC(''); CC
            // $mail->addBCC('bcc@example.com'); CCI

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');                        Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');                   Optional name

            //Content
            $mail->isHTML(true);                                             //Set email format to HTML
            $mail->Subject = strip_tags($_POST['sujet']);
            $mail->Body    = $_POST['message'];
            $mail->AltBody = strip_tags($_POST['message']);

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}