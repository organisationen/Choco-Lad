<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$_SESSION['NavId'] = 4;
//Vilken flik i headern är aktiv?

$title = 'okonfigurerad titel';
//Variabeln "$title" = innehållet i <title> 

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>

        <div class="container-fluid jumbotron">
            <div class="container-fluid text-center">
                <p>Det är vi som är..</p>
                <img height="100%" class="img-responsive d-block" onerror="this.style.display='none'" src="<?= $HostAddress .'/resources/multimedia/images/logo.png'?>" alt="Choco LAD">
                <h1>Chokladmakare</h1>
            </div>       
        </div>
        <div class="container panel">
            <h1>hallå</h1>
        </div>
<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess
?>