<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

session_start();

if(!isset($_SESSION['loggedIn'])){
	$_SESSION['loggedIn'] = false;
}

$root = $_SERVER['DOCUMENT_ROOT'];

?>