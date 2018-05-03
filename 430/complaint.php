<html>
<head>
<?php
include('db.php');
$complaint= @$_POST['complaint'];
$type= @$_POST['type'];
$submit= @$_POST['submit'];
		
?>
  <meta charset="utf-8">

  <title>Complaint</title>
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
     <p><p><strong><b><font size="3", color= "Black">COMPLAINTS:</b></strong><font><br/><p>
		<form class="form-signin" id="loginForm" method="post" action="">
      <p> Complaint type:<br/></p>
	   <p><select name = "type">
		<option value="Management problem">Management problem</option>
		<option value="Administration problem">Administration problem</option>
		<option value="Staff problem">Staff problem</option>
		</select><br/></p>
	   Message:
		<input type="text" id="complaint" name="complaint" class="form-control" placeholder="Enter message here" required>
        
<?php
	

		
if(isset($_POST['submit'])) {
	header('location:contacts_members.html');
	mysql_query("INSERT INTO complaint VALUES ('0','$type','$complaint')");
};
?>
<br/>
			
		<button name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Submit</button>
      </form><!-- /form -->
      <a href="contacts_members.html" class="Already-have-an-account">
      Back to contacts
      </a><br/>
    </div><!-- /card-container -->
  </div><!-- /container -->
 
</body>
</html>