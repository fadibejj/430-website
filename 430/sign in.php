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
print_r ($row);
if ($row[2]==$username && $row[3]==$password)
{
	session_start();
	$_SESSION['mydatabase']='true';
	header('location:index_members.html');
		
}
else{
echo "Wrong username or password";}
}
		
?>
		

  <meta charset="utf-8">

  <title>Sign in</title>
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
      <img id="profile-img" class="profile-img-card" src="profile pic.png" />
      <p id="profile-name" class="profile-name-card"></p>
		<form class="form-signin" id="loginForm" method="post" action="">
        <span id="reauth-email" class="reauth-email"></span>
        <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required >
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
		<button name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
      </form><!-- /form -->
	   
	  
	  
     <a href="main.html" class="forgot-password">
       Back to welcome page
      </a><br/>
	  <a href="sign up.php" class="sign-up">
        Sign up
      </a><br/>
	  
	  <a href="delete.php" class="sign-up">
        Delete account
      </a><br/>
	  <a href="changepassword.php" class="sign-up">
        Change password
      </a>
	 <br/>
    </div><!-- /card-container -->
  </div><!-- /container -->
 
</body>
</html>