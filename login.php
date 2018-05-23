<?php
require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

$title = 'Logga in';
$current_navbar_tab = "";

require($root . '/resources/templates/above.php');
//efter detta kommer innehållet i dokumentet (main).
?>

<div class="col-lg-6">

<?php

	include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');
    
    if (isset($_POST['submit'])) {
        
       $username = $_POST['username'];
       $password = $_POST['password'];
        
        if($username && $password) {
            ;
        } else {
            echo '<p class="bg-danger text-danger">Var god fyll i båda fälten</p>';
        }
        
    }
    
    if (isset($_POST['register'])) {
        
        header("location: $root . '/login_create.php'");
    }
?>

	<div class="container-fluid">
        <br/>
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
            <a href="login_create.php"><input class="btn btn-warning" type="button" name="register" value="Registrera dig"></a>

        </form>
    </div>
    <br/>
    <img class="img-responsive" src="http://via.placeholder.com/960x150"/>
</div>

<br/>
<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess;
?>