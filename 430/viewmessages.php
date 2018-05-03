

<html>
<head>

  <meta charset="utf-8">

  <title>View messages</title>
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
      <?php

$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "mydatabase";
$db= mysql_connect ($mysql_hostname, $mysql_username, $mysql_password) 
or die ("Could not connect to database");
mysql_select_db($mysql_database, $db) or die ("couldn't find database");

$result = mysql_query("SELECT * FROM messagecoach",$db);

echo "<table border='3'>
<col width=200>
<col width=300>
<tr>
<th><div style ='font:18px/60px Stencil Std;color:#ff0000'>Players' Messages</th>
</tr>";

while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td><div style ='font:15px/30px Stencil Std;color:#000000'>" . $row['playername'] . "</td>";
echo "<td><div style ='font:15px/30px Arial;color:#000000'>" . $row['message'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysql_close($db);
?>
		
      </form><!-- /form -->
      
    </div><!-- /card-container -->
  </div><!-- /container -->
 
</body>
</html>