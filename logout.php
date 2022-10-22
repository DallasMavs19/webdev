<?php

session_start();


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'tb_user';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$_SESSION = [];
session_unset();
session_destroy();
header("Location: welcome.php");

?>