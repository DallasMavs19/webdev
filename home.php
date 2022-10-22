<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
    </head>
    <body>

<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'tb_user';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

?>

<?php
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<h1><center>Welcome" . " " .$row['firstName']. " " . $row['lastName']. "</center></h1><br>";
        echo "<h1>" . "Name: ". $row['firstName']. " " . $row['lastName']. "<h1>";
        echo "<h1>" . "Address: ". $row['address'] . "</h1>";
        echo "<h1>" . "Contact Info: ". $row['contactNum'] . "</h1>";
        }
    }
    
?>
<br>
        <a href="page1.php"><h2>Page 1</h2>
        <a href="page2.php"><h2>Page 2</h2>
        <a href="page3.php"><h2>Page 3</h2>
<br>

        <a href="logout.php">Logout</a><br>
    </body>
</html>