<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "mydatabase";


$username = $_POST['username'];
$password = $_POST['password'];
if (!empty($username) && !empty($password)) {
  
// Create connection
  $conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  $stmt = $conn->prepare('SELECT * FROM members WHERE username = ? AND password = ?');
  $stmt->bind_param('ss', $username,$password);

  $stmt->execute();

  $result = $stmt->get_result();
  $tempArray = array();
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $tempArray [] = $row;
   }
   
   echo json_encode($tempArray);
 } else {
  echo "0";
}
}
$conn->close();
?>