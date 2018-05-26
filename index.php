<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$_SESSION['NavId'] = 1;

$title = 'Välkommen till Choco Lad!';
//Variabeln "$title" = innehållet i <title> 

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>

heafojp

<div class="container-fluid jumbotron">
            <div class="container-fluid text-center">
                <img height="100%" class="img-responsive d-block" onerror="this.style.display='none'" src="<?= $HostAddress .'/resources/multimedia/images/logo.png'?>" alt="Choco LAD">
                <hr class="my-4"/>
                <h2>"Belgiska konstverk"</h2>
            </div>       
        </div>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/new-items-script.php');
?>

<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess
?>