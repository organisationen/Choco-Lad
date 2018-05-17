<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

session_start();

$title = 'Välkommen till Choco Lad!';

require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/start.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/head.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/main_start.php');
include($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/end.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/footer.php');
require($_SERVER['DOCUMENT_ROOT'] . '/resources/templates/end.php');
//made by Jonatan Nogrell, I guess;
?>