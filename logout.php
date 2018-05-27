<?php
/*    if (isset($_SESSION['LogOut'])) {} */


session_start();

if(!isset($_SESSION['LoggedIn'])){
	$_SESSION['loggedIn'] = false;
}

if (isset($_session['LogOff'])) {
    
    if (session_status() == PHP_SESSION_ACTIVE) {
        
        session_destroy();
    }
}

header("Location:" .$HostAddress .'/index.php');
?>