<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once 'db.php';
function genererToken()
{
    // Je crée une chaine de caractère pour le token
    $chaine = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789&é"(-è_çà/*-+=*!§:/;.,?<>¤€`]°+}@^\|[{#~';
    // Je transforme la chaine en tableau pour des raisons d'encodage;
    $tableau = mb_str_split($chaine);
    // Je calcule la longueur de la chaine de caractère avec strlen()
    $longueur = count($tableau);
    // J'initialise une variable Token vide
    $token = '';
    // Je génère une clé aléatoire avec une boucle for avec une longueur comprise entre 16 et 30
    for ($i = 0; $i < rand(16, 30); $i++) {
        $token .= $tableau[rand(0, $longueur - 1)];
    }
    // Je hashe le token
    $token = md5(sha1($token));
    // J'enregistre mon token dans une session
    $_SESSION['token'] = $token;
    // Une fois le token terminé, je le retourne
    return $token;
}
$token = genererToken();
$date = date("Y-m-d H:i:s");

// Je prépare une requête SQL d'insertion
$requete = $dbh->prepare('
INSERT INTO users
    (nom, prenom, email, date, cle)
VALUES
    (:nom, :prenom, :email, :date, :cle)');
$requete->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$requete->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$requete->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$requete->bindValue(':date', $date, PDO::PARAM_STR);
$requete->bindValue(':cle', $token, PDO::PARAM_STR);

if($requete->execute())
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
else
{
    echo 'Erreur';
};
