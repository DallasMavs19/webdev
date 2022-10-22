<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'tb_user';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);


$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($row['username'] == $username && $row['password'] == $password){
    echo "<script>alert('Login Succesful')</script>";
    echo "<script>location.replace('home.php')</script>";

    session_start();
    $_SESSION['username'] == $username;
    
}else{

    echo "<script>alert('Check your Credentials')</script>";
    echo "<script>location.replace('login.php')</script>";
}









?>
<script></script>