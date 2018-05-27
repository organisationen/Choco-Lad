<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$_SESSION['NavId'] = 'integer';
//Vilken flik i headern är aktiv?

$title = 'okonfigurerad titel';
//Variabeln "$title" = innehållet i <title> 

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).

$query = "SELECT * FROM orders";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($result)) {
echo "<h2 class='text-danger''>" .implode("|",$row) ."</h2>";
?>



<?php
}
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess
?>
