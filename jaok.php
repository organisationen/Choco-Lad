<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$_SESSION['NavId'] = 3;
//Vilken flik i headern är aktiv?

$title = 'okonfigurerad titel';
//Variabeln "$title" = innehållet i <title> 

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>

<pre class="container-fluid text-center bg-primary" style="border-radius: 10px; box-shadow: 0px 20px 40px rgba(0,0,0,0.4);">
    <h1>Verktyg & sånt</h1>
    <small class="lead">Testat att slå Konamikoden? :)</small>
</pre>

<div class="container text-center">
    <p><a class="btn btn-default" href="<?= $HostAddress .'/add-products.php'?>">Lägg till produkter i databasen <span class="lead text-primary">products</span></a></p>
    <p><a class="btn btn-default" href="<?= $HostAddress .'/orders.php'?>">Se ordrar i databasen <span class="lead text-primary">orders</span></a></p>
    <p><a class="btn btn-default" href="<?= $HostAddress .'/login_update.php'?>">Misslyckad uppdatera profil-sida</a></p>
</div>

<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess
?>