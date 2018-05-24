
<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');
    
$_SESSION['NavId'] = 6;

    if(isset($_POST['submit'])) {
    
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $hashed_password = mysqli_real_escape_string($connection, hash('sha512', $_POST['password']));
        
        $query = "INSERT INTO USERS(username,email,password)";
        $query .= "VALUES ('$username', '$email', '$hashed_password')";
        
        $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die('Något gick fel' . mysqli_error());
    } else {
        header("location: login.php");
    }
    }
?>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$title = 'Registrera dig';

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>

<div class="col-lg-6">

	<form action="login_create.php" method="post">
        
        <div class="form-group">
            <label for="username">Användarnamn</label>
            <input type="text" name="username" class="form-control">
        </div> 
        
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="password">Lösenord</label>
            <input type="password" name="password" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="password">Återbekräfta Lösenord</label>
            <input type="password" name="password_confirm" class="form-control">
        </div>
        
        <input class="btn btn-primary" type="submit" name="submit" value="Skapa konto">
        
    </form>    
</div>

<br/>
<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess;
?>