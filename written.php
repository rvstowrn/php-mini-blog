<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$n=$_POST['name'];
$u=$_POST['pass'];
$sql = "INSERT INTO blog (Title,Description)
VALUES ('$n','$u')";

if ($conn->query($sql) === TRUE) {
    header('Location: blogmain.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
 ?>