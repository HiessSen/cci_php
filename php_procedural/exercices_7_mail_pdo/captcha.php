<?php
// Je demarre la sessions
session_start();
// Je génère une clé aléatoire
$captcha = substr(str_shuffle('azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789'),0,4);
// J'enregistre le captcha dans la session
$_SESSION['captcha'] = $captcha;
// On va définir la largeur et la hauteur de l'image
$width = 150;
$height = 50;
// Je vais créer une nouvelle image
$image = imagecreatetruecolor($width, $height);
// Je vais definir les différentes couleurs de mon captcha
$background_color = imagecolorallocate($image, 255, 255, 255); // Fond blanc
$text_color = imagecolorallocate($image, 0, 0, 0); // Couleur noires
$line_color = imagecolorallocate($image, 0, 0, 255); // Lignes bleues
// Je vais dessiner le background sur mon image
imagefilledrectangle($image, 0, 0, $width, $height, $background_color);
// Je dessine les lignes pour compliquer la lecture du captcha
for ($i = 0; $i < 5; $i++) {
    imageline($image,rand(0,$width),rand(0,$height),rand(0,$width),rand(0,$height),$line_color);
}
// Je dessine des petits points pour compliquer la lecture du captcha
for ($i = 0; $i < 200; $i++) {
    imagesetpixel($image, rand(0,$width), rand(0,$height), $line_color);
}
// J'écris mon captcha dans l'image avec imagestring()
imagestring($image, 8, rand(10,80), rand(10,20), $captcha, $text_color);
// J'envoie un header pour indiquer que c'est une image
header('Content-type: image/png');
// Je génère l'image avec la fonction imagepng()
imagepng($image);
imagedestroy($image);

