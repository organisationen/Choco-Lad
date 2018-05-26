<?php

session_start();

if(!isset($_SESSION['loggedIn'])){
	$_SESSION['loggedIn'] = false;
	header("Location:index.php");
}

if (isset($_session['LogOff'])) {
    
    if (session_status() == PHP_SESSION_ACTIVE) {
        
        session_destroy();
    }
}

if(isset($_SESSION['username'])){
    $_SESSION['username'] = $username;
}

$root = $_SERVER['DOCUMENT_ROOT'];

?>