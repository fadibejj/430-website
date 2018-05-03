<?php
if($_POST)
{
$username= @$_POST['username'];
$password= @$_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username= mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("mydatabase");
$result = mysql_query("SELECT * FROM members WHERE email = '$username' and password='$password'")
or die ("failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username']==$username && $row['password']==$password)
{
	echo "login success".$row['username'];
		
}
else{
echo "failed";}
}
		
?>