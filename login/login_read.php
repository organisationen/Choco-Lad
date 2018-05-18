<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$title = 'Registrera dig';

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');
    
 
        
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
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess;
?>