<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$_SESSION['NavId'] = 1;

$title = 'Välkommen till Choco Lad!';
//Variabeln "$title" = innehållet i <title> 

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>

heafojp

<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess
?>