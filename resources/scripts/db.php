<?php
$connection = mysqli_connect('localhost', 'root', '', 'chocolad');
	if(!$connection) {	
        die("Databasen kan ej nås");	
	}
?>