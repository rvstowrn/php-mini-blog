<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$n=$_POST['name'];
$u=$_POST['username'];
$p=$_POST['password'];
$sql = "INSERT INTO loginform (name,username,password)
VALUES ('$n', '$u','$p')";

if ($conn->query($sql) === TRUE) {
    header('Location: form.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>