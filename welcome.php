<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Page</title>
    </head>
    <body>
        <center><h1>Welcome</h1></center>
        <style>
            .login-button{
                background-color:black;
                color: white;
                border: none;
                height: 36px;
                width: 105px;
                border-radius: 2px;
                cursor: pointer;
                margin-right: 8px;
                margin-bottom: 8px;
            }
        </style>
        
       <center><button class= "login-button"
        onclick="location.href= 'login.php'"
        >
        Login
        </button></center>
        <style>
            .register-button{
                background-color:black;
                color: white;
                border: none;
                height: 36px;
                width: 105px;
                border-radius: 2px;
                cursor: pointer;
                margin-right: 8px;
                margin-bottom: 8px;
            }
        </style>
        <center> <button class= "register-button"
        onclick="location.href= 'registration.php'"
        >
        Sign Up
        </button></center>
        
    </body>
</html>