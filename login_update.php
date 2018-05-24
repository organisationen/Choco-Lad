<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$title = 'Registrera dig';

$_SESSION['NavId'] = 6;

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/fetch_users.php');?>
        
<?php
if(isset($_POST['submit'])) {
    
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Uppslagning misslyckad" . mysqli_error($connection));
    }
}


?>
<div class="col-lg-6">
    <form action="login_create.php" method="post">
        
        <div class="form-group">
            <label for="username">Användarnamn</label>
            <input type="text" name="username" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="password">Lösenord</label>
            <input type="password" name="password" class="form-control">
        </div>
        
        <div class="form-group">
            <select name="id" id="">
                
<?php showALLData();?>    
<!--                <option value="">1</option>-->
            </select>
        </div>
        
        <input class="btn btn-primary" type="submit" name="submit" value="Byt lösenord">
        
    </form>    
</div>
<br/>

<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess;
?>
