<html>
<head>

  <meta charset="utf-8">

  <title>View league games</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/style.css">

  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
  crossorigin="anonymous">
</head>
<body>

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

$result = mysql_query("SELECT * FROM upcoming",$db);

echo "<table border='3'>
<col width=200>
<col width=200>
<col width=200>
<tr>
<th><div style ='font:14px/30px Stencil Std;color:#ff0000'>Against </th>
<th><div style ='font:14px/30px Stencil Std;color:#ff0000'>Location</th>
<th><div style ='font:14px/30px Stencil Std;color:#ff0000'>Date</th>
<th><div style ='font:14px/30px Stencil Std;color:#ff0000'>Result</th>
</tr>";

while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td><div style ='font:12px/30px Stencil Std;color:#000000'>" . $row['against'] . "</td>";
echo "<td><div style ='font:12px/30px Stencil Std;color:#000000'>" . $row['away/home'] . "</td>";
echo "<td><div style ='font:12px/30px Stencil Std;color:#000000'>" . $row['date'] . "</td>";
echo "<td><div style ='font:12px/30px Stencil Std;color:#000000'>" . $row['result'] . "</td>";
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