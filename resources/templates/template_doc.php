<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$title = 'okonfigurerad titel';
//Variabeln "$title" = innehållet i <title> 

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>

skriv här

<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess
?>