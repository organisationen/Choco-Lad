<?php include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');?>
<?php 


function showALLData() {
    global $connection;
    
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Något gick fel' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";
    }
}

?>