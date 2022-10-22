<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <body>
        <button class= "home-button"
        onclick="location.href= 'welcome.php'"
        >
        Home
        </button>
           <center><h2>Login</h2></center>
            <center><form action="loginprocess.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required value=""><br><br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required value=""><br><br>
                <button type="submit" name="submit">Login</button>
            </form></center>
            <br>
            <button class= "registartion.php"
            onclick="location.href= 'registration.php'"
            >
            Registration
            </button>
            
        </body>
    </head>
</html>