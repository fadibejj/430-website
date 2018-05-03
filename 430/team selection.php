<html>
<head>
<?php
include('db.php');
$player1= @$_POST['player1'];
$player2= @$_POST['player2'];
$player3= @$_POST['player3'];
$player4= @$_POST['player4'];
$player5= @$_POST['player5'];
$player6= @$_POST['player6'];

$submit= @$_POST['submit'];
		
?>
  <meta charset="utf-8">

  <title>player selection</title>
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
     <p><p><strong><b><font size="3", color= "Black">PLAYERS SELECTION:</b></strong><font><br/><p>
		<form class="form-signin" id="loginForm" method="post" action="">
      <p> Players:<br/></p>
	  Player 1
	   <p><select name = "player1">
		<option value="Kobe Bryant">Kobe Bryant</option>
		<option value="Lebron James">Lebron James</option>
		<option value="Shaun Livingston">Shaun Livingston</option>
		<option value="Stephen Curry">Stephen Curry</option>
		<option value="Carmelo Anthony">Carmelo Anthony</option>
		<option value="Russell Westbrook">Russell Westbrook</option>
		
		</select><br/></p>
		  Player 2
		<p><select name = "player2">
		<option value="Kobe Bryant">Kobe Bryant</option>
		<option value="Lebron James">Lebron James</option>
		<option value="Shaun Livingston">Shaun Livingston</option>
		<option value="Stephen Curry">Stephen Curry</option>
		<option value="Carmelo Anthony">Carmelo Anthony</option>
		<option value="Russell Westbrook">Russell Westbrook</option>
		</select><br/></p>
		  Player 3
		<p><select name = "player3">
		<option value="Kobe Bryant">Kobe Bryant</option>
		<option value="Lebron James">Lebron James</option>
		<option value="Shaun Livingston">Shaun Livingston</option>
		<option value="Stephen Curry">Stephen Curry</option>
		<option value="Carmelo Anthony">Carmelo Anthony</option>
		<option value="Russell Westbrook">Russell Westbrook</option>
		</select><br/></p>
		  Player 4
		<p><select name = "player4">
		<option value="Kobe Bryant">Kobe Bryant</option>
		<option value="Lebron James">Lebron James</option>
		<option value="Shaun Livingston">Shaun Livingston</option>
		<option value="Stephen Curry">Stephen Curry</option>
		<option value="Carmelo Anthony">Carmelo Anthony</option>
		<option value="Russell Westbrook">Russell Westbrook</option>
		</select><br/></p>
		  Player 5
		<p><select name = "player5">
		<option value="Kobe Bryant">Kobe Bryant</option>
		<option value="Lebron James">Lebron James</option>
		<option value="Shaun Livingston">Shaun Livingston</option>
		<option value="Stephen Curry">Stephen Curry</option>
		<option value="Carmelo Anthony">Carmelo Anthony</option>
		<option value="Russell Westbrook">Russell Westbrook</option>
		</select><br/></p>
		  Player 6 (subsitute)
		<p><select name = "player6">
		<option value="Kobe Bryant">Kobe Bryant</option>
		<option value="Lebron James">Lebron James</option>
		<option value="Shaun Livingston">Shaun Livingston</option>
		<option value="Stephen Curry">Stephen Curry</option>
		<option value="Carmelo Anthony">Carmelo Anthony</option>
		<option value="Russell Westbrook">Russell Westbrook</option>
		</select><br/></p>
	  
	
        
<?php
	

		
if(isset($_POST['submit'])) {
	header('location:coach.html');
	mysql_query("INSERT INTO playerselection VALUES ('$player1')");
	mysql_query("INSERT INTO playerselection VALUES ('$player2')");
	mysql_query("INSERT INTO playerselection VALUES ('$player3')");
	mysql_query("INSERT INTO playerselection VALUES ('$player4')");
	mysql_query("INSERT INTO playerselection VALUES ('$player5')");
	mysql_query("INSERT INTO playerselection VALUES ('$player6')");
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