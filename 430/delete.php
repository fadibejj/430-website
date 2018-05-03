<html>
<head>
<?php

if($_POST)
{
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "mydatabase";
$db= mysql_connect ($mysql_hostname, $mysql_username, $mysql_password) 
or die ("Could not connect to database");

$username= @$_POST['username'];
$password= @$_POST['password'];
$username = stripcslashes($username);
$password = stripcslashes($password);
$username= mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_select_db($mysql_database, $db) or die ("couldn't find database");


$result = mysql_query("SELECT * FROM members WHERE email = '".$username."' and password='".$password."'")
or die ("failed to query database".mysql_error());
$row = mysql_fetch_array($result);

if ($row[2]==$username && $row[3]==$password)
{
	mysql_query("DELETE FROM members WHERE (email='$username')");
	echo "<div style ='font:14px/21px Arial;color:#ff0000'>Account deleted</div>";
		
}
else{
echo "<div style ='font:14px/21px Arial;color:#ff0000'>Wrong username or password</div>";}
};
		
?>
		

  <meta charset="utf-8">

  <title>Delete account</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/style.css">

  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
  crossorigin="anonymous">
</head>
<body>
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
  -->
  <div class="container">
    <div class="card card-container">
      <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
      
		<form class="form-signin" id="loginForm" method="post" action="">
		<p><p><strong><b><font size="4", color= "Black">DELETE ACCOUNT</b></strong></font><br/><p>
        <span id="reauth-email" class="reauth-email"></span>
        <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required >
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
		<button name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Delete</button>
      </form><!-- /form -->
	   
	  
	  
     <a href="main.html" class="forgot-password">
       Back to welcome page
      </a><br/>
	  
    	
	 <br/>
    </div><!-- /card-container -->
  </div><!-- /container -->
 
</body>
</html>