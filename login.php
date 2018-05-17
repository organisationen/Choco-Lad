<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

session_start();

$title = 'Logga in';

require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/start.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/head.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/main_start.php');
//efter detta kommer innehållet i dokumentet (main).
?>

<div class="col-lg-6">

<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

	include($_SERVER['DOCUMENT_ROOT'] . '/resources/database/db.php');
    
    if (isset($_POST['submit'])) {
        
       $username = $_POST['username'];
       $password = $_POST['password'];
        
        if($username && $password) {
            echo $username;
            echo $password;
        } else {
            echo '<p class="bg-danger text-danger">Var god fyll i båda fälten</p>';
        }
        
    }
?>

	<form action="login.php" method="post">
        
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        
        <input class="btn btn-primary" type="submit" name="submit" value="Logga in">
        <input class="btn btn-warning" type="submit" name="register" value="Registrera dig">
        
    </form>    
</div>

<br/>
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/end.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/footer.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/end.php');
//made by Jonatan Nogrell, I guess;
?>