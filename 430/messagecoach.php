<html>
<head>
<?php
include('db.php');
$message= @$_POST['message'];
$playername= @$_POST['playername'];
$submit= @$_POST['submit'];


		
?>
  <meta charset="utf-8">

  <title>Message coach</title>
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
		<p><p><strong><b><font size="4", color= "Black">Message coach</b></strong><font><br/><p>
		<input type="text" id="inputfirstName" name="playername" class="form-control" placeholder="Player Name" required>
        <input name="message" type="text" id="inputUsername" class="form-control" placeholder="Message" required >
<?php	if ($_POST){ 	
		mysql_query("INSERT INTO messagecoach VALUES ('$playername','$message')");
				}
				
?><br/>
			
		<button name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Send</button>
      </form><!-- /form -->
      <a href="playerspage.php" class="Already-have-an-account">
		   Back to player page
      </a><br/>
    </div><!-- /card-container -->
  </div><!-- /container -->
 
</body>
</html>