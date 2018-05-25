<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

session_start();

if (isset($_session['LogOff'])) {
    
    if (session_status() == PHP_SESSION_ACTIVE) {
        
        session_destroy();
    }
}

if(isset($_SESSION['loggedIn'])){
     $username = $_SESSION['username'];
}

$root = $_SERVER['DOCUMENT_ROOT'];

?>