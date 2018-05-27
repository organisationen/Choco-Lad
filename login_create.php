
<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');
    
$_SESSION['NavId'] = 6;

    if(isset($_POST['submit'])) {
    
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $hashed_password = mysqli_real_escape_string($connection, hash('sha512', $_POST['password']));
        $birthdate = mysqli_real_escape_string($connection, $_POST['birthdate']);
        $street = mysqli_real_escape_string($connection, $_POST['street']);
        $street_nr = mysqli_real_escape_string($connection, $_POST['street_nr']);
        $zip_code = mysqli_real_escape_string($connection, $_POST['zip_code']);
        $city = mysqli_real_escape_string($connection, $_POST['city']);
        $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
        
        $query = "INSERT INTO users(username,email,password,birthdate,street,street_nr,zip_code,city,first_name,last_name)";
        $query .= "VALUES ('$username', '$email', '$hashed_password', '$birthdate', '$street', '$street_nr',' '$zip_code', '$city', '$first_name', '$last_name')";
        
        $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die('Något gick fel' . mysqli_error());
    } else {
        header("location: login.php");
        $_SESSION['LoggedIn'] = true;
    }
    }
?>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$title = 'Registrera dig';

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>

<div class="container">

	<form action="login_create.php" method="post">
        
            <div class="form-group">
                <label for="username">Användarnamn</label>
                <input type="text" name="username" class="form-control">
            </div> 
            <div class="form-group">
                <label for="first_name">Förnamn</label>
                <input type="text" name="first_name" class="form-control">
            </div> 
            <div class="form-group">
                <label for="last_name">Efternamn</label>
                <input type="text" name="last_name" class="form-control">
            </div> 

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control">
            </div>
        
            <div class="form-group">
                <label for="birthdate">Födelsedatum</label>
                <input type="date" name="birthdate" class="form-control">
            </div>
            <br/>
        
            <div class="form-inline text-center">
                <label for="street">Gatuadress:</label>
                <input type="text" name="street" class="form-control">
                
                <label for="street_nr">Gatunummer:</label>
                <input type="text" name="street_nr" class="form-control">
                
                <label for="zip_code">Postkod:</label>
                <input type="text" name="zip_code" class="form-control">

                <label for="city">Postort:</label>
                <input type="text" name="city" class="form-control">
            </div>
            <br/>

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

        <div class="container-fluid">
            <br/>
            <img class="img-responsive" src="http://via.placeholder.com/960x150"/>
        </div>
        <br/>

<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess;
?>