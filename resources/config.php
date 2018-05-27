<?php

session_start();

if(!isset($_SESSION['loggedIn'])){
	$_SESSION['loggedIn'] = false;
}

if (isset($_session['LogOff'])) {
    
    if (session_status() == PHP_SESSION_ACTIVE) {
        
        session_destroy();
    }
}

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}

$root = $_SERVER['DOCUMENT_ROOT'];

$HostAddress = 'http://localhost';
//Din publika adress till servern eg. 'https://google.com'

require($root .'/resources/scripts/db.php')

?>