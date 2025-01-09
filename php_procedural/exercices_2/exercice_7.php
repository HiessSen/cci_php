<?php
$tableau1 = ['rouge','vert','bleue'];
$tableau2 = ['jaune','violet','orange'];
$tabFusion = array_merge($tableau1, $tableau2);
echo $tabFusion[0] . ' - ' . $tabFusion[1] . ' - ' . $tabFusion[2] . ' - ' . $tabFusion[3] . ' - ' . $tabFusion[4] . ' - ' . $tabFusion[5];