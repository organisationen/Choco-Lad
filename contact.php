<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$_SESSION['NavId'] = 5;
//Vilken flik i headern är aktiv?

$title = 'okonfigurerad titel';
//Variabeln "$title" = innehållet i <title> 

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>  
<div class="container panel-group">
            <div class="jumbotron">
          <div class="container-fluid text-center">
            <h1>Nå oss!</h1>      
            <p>Kontaktinformation finner du här:</p>
          </div>
        </div>
        <div class="panel panel-default">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d214.56417964470606!2d139.76605326582128!3d35.671355712939615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be68e21d35f%3A0xc6026d71a80b079a!2z44K044OH44Kj44OQIOS4iei2iumKgOW6p-W6lw!5e0!3m2!1ssv!2sse!4v1527346652687" width="100%" height="400" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="list-group">
                    <a href="mailto:joakim.ohlsson@gbg.nti.se" target="_blank" class="list-group-item"><h4>Email kundtjänst: joakim.ohlsson@gbg.nti.se</h4></a>
                    <a href="tel:+738496650" target="_blank" class="list-group-item"><h4>Telefonnummer kundtjänst: +738496650</h4></a>
                    <a href="tel:031-106020" target="_blank" class="list-group-item"><h4>Affärsärenden? Ring: 031-106020</h4></a>
                </div>
            </div>
        </div>
</div>

<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess
?>