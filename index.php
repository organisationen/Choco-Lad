<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$_SESSION['NavId'] = 1;

$title = 'Välkommen till Choco Lad!';
//Variabeln "$title" = innehållet i <title> 

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>
        <div class="container-fluid jumbotron">
            <div class="container-fluid text-center">
                <img height="100%" class="img-responsive d-block" onerror="this.style.display='none'" src="<?= $HostAddress .'/resources/multimedia/images/logo.png'?>" alt="Choco LAD">
                <hr class="my-4"/>
                <h1 style="font-family: 'Chicle', cursive;">"Belgiska konstverk"</h1>
                <h2><small style="font-family: 'Merriweather', serif;">-direkt till din dörr</small></h2>
            </div>       
        </div>

        <div class="container jumbotron">
            <h2>Nyanlända varor:</h2>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/new-items-script.php');
?>
        </div>

<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess
?>