<html>
<head>
<?php
include('db.php');
$name= @$_POST['name'];
$price= @$_POST['price'];
$submit= @$_POST['submit'];


	

	
	
		
?>
  <meta charset="utf-8">

  <title>Store</title>
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
		<p><p><strong><b><font size="4", color= "Black">ADD ITEMS TO STORE</b></strong><font><br/><p>
		<input type="text" id="inputfirstName" name="name" class="form-control" placeholder="Item" required>
        <input name="price" type="text" id="inputUsername" class="form-control" placeholder="Price" required >
<?php	if ($_POST){ 	
		mysql_query("INSERT INTO store VALUES ('0','$name','$price')");
				}
				
?><br/>
			
		<button name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Set item</button>
      </form><!-- /form -->
      <a href="Admin.html" class="Already-have-an-account">
		   Back to Admin page
      </a><br/>
    </div><!-- /card-container -->
  </div><!-- /container -->
 
</body>
</html>