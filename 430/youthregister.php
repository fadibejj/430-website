<html>
<head>
<?php
include('db.php');
$fullname= @$_POST['fullname'];
$fathername= @$_POST['fathername'];
$gender= @$_POST['gender'];
$age= @$_POST['age'];
$submit= @$_POST['submit'];
		
?>
  <meta charset="utf-8">

  <title>Register Youth</title>
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
		<p><p><strong><b><font size="3", color= "Black">Youth team registration application:</b></strong><font><br/><p>
		<form class="form-signin" id="loginForm" method="post" action="">
        
		<input type="text" id="inputuserName" name="fullname" class="form-control" placeholder="Full Name" required>
        <input type="text" id="inputuserName" name="fathername" class="form-control" placeholder="Father's Name" required>
		Gender:
		<p><select name = "gender">
  <option value="male">Male</option>
  <option value="female">Female</option></select><br/></p>
  Date of Birth:
  <p><select name = age>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>
  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>

  </select><br/></p>
		
<?php
	if(isset($_POST['submit'])) {

		mysql_query("INSERT INTO registeryouth VALUES ('0','$fullname','$fathername','$gender','$age')");


	header('location:main.html');
	
};
?>
<br/>
			
		<button name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Submit application</button>
      </form><!-- /form -->
      
    </div><!-- /card-container -->
  </div><!-- /container -->
 
</body>
</html>