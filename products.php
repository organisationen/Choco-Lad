<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

include($root . '/resources/scripts/order-script.php');

$_SESSION['NavId'] = 2;
//Vilken flik i headern är aktiv?

$title = 'Våra Produkter';
//Variabeln "$title" = innehållet i <title> 

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>

<?php include($root . '/resources/scripts/products-script.php');?>

<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess
?>