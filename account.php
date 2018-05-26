<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

if ($_SESSION['LoggedIn'] = false) {
    header("Location:" .$HostAddress .'/login.php');
}

$_SESSION['NavId'] = 6;
//Vilken flik i headern är aktiv?

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