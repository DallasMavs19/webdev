<?php

session_start();


require "config.php";

if(!empty($_SESSION["id"])){
    header("Location: welcome.php");
}

if(isset($_POST["submit"])){

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $username = $_POST["username"];
    $address = $_POST["address"];
    $contactNum = $_POST["contactNum"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    
    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($duplicate) > 0){

        echo "<script> alert('Username Has Already Taken'); </script>";
        echo "<script> location.replace('registration.php'); </script>";

    }else{
        
        if($password == $confirmpassword){
            $query = "INSERT INTO user VALUES('','$firstName', '$lastName' , '$address', '$contactNum', '$username', '$password')";

            mysqli_query($conn, $query);
            
            echo "<script> alert('Registration Successful'); </script>";
            echo "<script> location.replace('login.php'); </script>";


        }else{
            echo "<script> alert('Password Does Not Match'); </script>";
            echo "<script> location.replace('registration.php'); </script>";
 
        }
    }
}




?>