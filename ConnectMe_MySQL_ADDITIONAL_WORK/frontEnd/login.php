<?php
session_start();
// Fetching Values From URL
$email2 = $_POST['email'];
$password2 = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if (isset($_POST['email'])) 
{

	
	$result = mysqli_query($conn, "SELECT email_id,password FROM login WHERE email_id='$email2' 
                            AND password='$password2'");

$row = mysqli_num_rows($result);

if($row > 0)
 {
 	$_SESSION['email']=$row['email'];
  echo "You are logged in";
 }

else{
	echo "Invalid Username or Password ";
}
}
$conn->close(); // Connection Closed
?>
