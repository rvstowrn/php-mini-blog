<?php
$connect=new mysqli('localhost', 'root','', 'login');
if($connect->connect_error)
die('connection failed');
else
$n=$_POST['name'];
$p=$_POST['pass'];
$sql="SELECT name FROM loginform WHERE username='$n' AND password='$p'";
$result=$connect->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{echo "welcome ".$row['name'];
header('Location: home.php');}
}
else
echo "<h3>Username and password doesn't match</h3><a href=\"javascript:history.go(-1)\">GO BACK</a>";
$connect->close();
?>
