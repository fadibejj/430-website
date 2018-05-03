<html>
<head>
<?php
include('db.php');
$day1= @$_POST['day1'];
$day2= @$_POST['day2'];
$day3= @$_POST['day3'];
$day4= @$_POST['day4'];
$day5= @$_POST['day5'];

$submit= @$_POST['submit'];
		
?>
  <meta charset="utf-8">

  <title>Schedule selection</title>
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
     <p><p><strong><b><font size="3", color= "Black">Training hours:</b></strong><font><br/><p>
		<form class="form-signin" id="loginForm" method="post" action="">
      
	  Monday
	  	<p><select name = "day1">
		<option value="10-12am">10-12am</option>
		<option value="12-2pm">12-2pm</option>
		<option value="2-4pm">2-4pm</option>
		<option value="4-6pm">4-6pm</option>
		<option value="6-8pm">6-8pm</option>
		<option value="8-10pm">8-10pm</option>
		</select><br/></p>
		Tuesday
		<p><select name = "day2">
		<option value="10-12am">10-12am</option>
		<option value="12-2pm">12-2pm</option>
		<option value="2-4pm">2-4pm</option>
		<option value="4-6pm">4-6pm</option>
		<option value="6-8pm">6-8pm</option>
		<option value="8-10pm">8-10pm</option>
		</select><br/></p>
		  Wednesday
			<p><select name = "day3">
		<option value="10-12am">10-12am</option>
		<option value="12-2pm">12-2pm</option>
		<option value="2-4pm">2-4pm</option>
		<option value="4-6pm">4-6pm</option>
		<option value="6-8pm">6-8pm</option>
		<option value="8-10pm">8-10pm</option>
		</select><br/></p>
		  Thursday
			<p><select name = "day4">
		<option value="10-12am">10-12am</option>
		<option value="12-2pm">12-2pm</option>
		<option value="2-4pm">2-4pm</option>
		<option value="4-6pm">4-6pm</option>
		<option value="6-8pm">6-8pm</option>
		<option value="8-10pm">8-10pm</option>
		</select><br/></p>
		  Friday
		<p><select name = "day5">
		<option value="10-12am">10-12am</option>
		<option value="12-2pm">12-2pm</option>
		<option value="2-4pm">2-4pm</option>
		<option value="4-6pm">4-6pm</option>
		<option value="6-8pm">6-8pm</option>
		<option value="8-10pm">8-10pm</option>
		</select><br/></p>
		  
	
    
<?php
	

		
if(isset($_POST['submit'])) {
	header('location:coach.html');
	mysql_query("INSERT INTO schedule VALUES ('Monday','$day1')");
	mysql_query("INSERT INTO schedule VALUES ('Tuesday','$day2')");
	mysql_query("INSERT INTO schedule VALUES ('Wednesday','$day3')");
	mysql_query("INSERT INTO schedule VALUES ('Thursday','$day4')");
	mysql_query("INSERT INTO schedule VALUES ('Friday','$day5')");
};
?>
<br/>
			
		<button name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Submit</button>
      </form><!-- /form -->
      <a href="coach.html" class="Already-have-an-account">
      Back to coach page
      </a><br/>
    </div><!-- /card-container -->
  </div><!-- /container -->
 
</body>
</html>