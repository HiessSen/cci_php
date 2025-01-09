<?php
$password = 'eeééee';
$password2 = 'azertyuiop&é"à';
function remplacerCaracteres($string){
    $tableau = mb_str_split($string);
    $stringFinale = '';
    foreach ($tableau as $caractere)
    {
        switch ($caractere) {
            case 'é':
            case 'è':
            case 'ê':
                $stringFinale .= 'e';
                break;
            case 'à':
            case 'â':
                $stringFinale .= 'a';
                break;
            case 'ù':
            case 'ü':
                $stringFinale .= 'u';
                break;
            case 'ô':
                $stringFinale .= 'o';
                break;
            case '&':
            case '~':
            case '"':
            case '#':
            case '\'':
            case '{':
            case '(':
            case '[':
            case '-':
            case '|':
            case '`':
            case '_':
            case '^':
                $stringFinale = $stringFinale;
                break;
            default:
                $stringFinale .= $caractere;
        }
    }
    return $stringFinale;
}
echo remplacerCaracteres($password2);