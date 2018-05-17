<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

session_start();

$title = 'Registrera dig';

require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/start.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/head.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/main_start.php');
//efter detta kommer innehållet i dokumentet (main).
?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/database/db.php');
    
 
        
        $query = "SELECT * FROM users";
        
        $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die('Något gick fel' . mysqli_error());
    }
?>

<div class="col-lg-6">

    <?php
    
    while($row = mysqli_fetch_assoc($result)) {
      
        ?>
    <pre>
    <?php
    print_r($row);
    ?>
    </pre>
    <?php   
    }
    ?>

	
</div>

<br/>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/end.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/footer.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/end.php');
//made by Jonatan Nogrell, I guess;
?>