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
<div class="container-fluid">
    <h1>Användarnamn: <span class="text-primary"><?= $_SESSION['username']?></span></h1>
    <h1>Inloggad: <?php if (isset($_SESSION['LoggedIn'])){echo '<span class="text-success">Ja</span>';} else {echo '<span class="text-danger">Nej</span>';}?></h1>

    <div class="container"> 
        <form class="form-group" action="<?= $HostAddress .'/logout.php'?>" method="post">
            <input class="btn btn-danger" type="submit" name="LogOff" value="Logga ut">
        </form>
    </div>
</div>    
<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess
?>