<html>
<head>
<?php
include('db.php');
$date= @$_POST['date'];
$location= @$_POST['location'];
$submit= @$_POST['submit'];


	

	
	
		
?>
  <meta charset="utf-8">

  <title>Meeting</title>
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
		<p><p><strong><b><font size="4", color= "Black">Meeting date and location</b></strong><font><br/><p>
		<input type="text" id="inputfirstName" name="date" class="form-control" placeholder="Date" required>
        <input name="location" type="text" id="inputUsername" class="form-control" placeholder="Location" required >
<?php	
$result = mysql_query("SELECT * FROM meeting WHERE place ='$location' and date ='$date'")
or die ("failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($_POST) {

if ($row[0]==$location && $row[1]==$date)
{
	echo "date already taken";
}else	
{
	mysql_query("INSERT INTO meeting VALUES ('$location','$date')");			
};};


				
?><br/>
			
		<button name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Set date</button>
      </form><!-- /form -->
      <a href="Admin.html" class="Already-have-an-account">
		   Back to Admin page
      </a><br/>
    </div><!-- /card-container -->
  </div><!-- /container -->
 
</body>
</html>