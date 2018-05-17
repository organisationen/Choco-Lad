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

<div class="col-lg-6">

<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
	if($connection) {	
		echo "<p class='bg-primary text-primary'>Uppkopplad till databasen</p>";
	} else {
		
		die("Databasen kan ej nås");	
	}
    
    if(isset($_POST['submit'])) {
    
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        
        $query = "INSERT INTO USERS(username,password)";
        $query .= "VALUES ('$username', '$password')";
        
        $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die('Något gick fel' . mysqli_error());
    }
    }
?>

	<form action="login_create.php" method="post">
        
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        
        <input class="btn btn-primary" type="submit" name="submit" value="Skapa konto">
        
    </form>    
</div>

<br/>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/end.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/footer.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/end.php');
//made by Jonatan Nogrell, I guess;
?>