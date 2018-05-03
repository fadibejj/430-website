<html>
<head>
<?php
include('db.php');
$fullname= @$_POST['fullname'];
$username= @$_POST['username'];
$password= @$_POST['password'];
$repeatpassword= @$_POST['repeatpassword'];
$submit= @$_POST['submit'];
		
?>
  <meta charset="utf-8">

  <title>Sign up</title>
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
		<input type="text" id="inputfirstName" name="fullname" class="form-control" placeholder="Full Name" required>
        <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required >
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
		<input type="password" id="inputPassword" name="repeatpassword" class="form-control" placeholder="Retype your password" required>
<?php
	
if($password==$repeatpassword){
		mysql_query("INSERT INTO members VALUES ('0','$fullname','$username','$password')");
				}
				else
echo "<div style ='font:14px/21px Arial;color:#ff0000'>Your passwords don't match</div>";
if(isset($_POST['submit'])&&($password==$repeatpassword)) {
	header('location:index_members.html');
	
};
?>
<br/>
			
		<button name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign up</button>
      </form><!-- /form -->
	  
      <a href="sign in.php" class="Already-have-an-account">
       Already have an account?
      </a><br/>
	   <a href="main.html" class="forgot-password">
       Back to welcome page
    </div><!-- /card-container -->
  </div><!-- /container -->
 
</body>
</html>