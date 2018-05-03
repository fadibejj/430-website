<?php
session_start();
if($_SESSION['mydatabase'])
{
	header('location: index.php');
}	
else {
	header('location: sign in.php');
}	

?>
<h1> Welcome you are authenticated...! </h1>
