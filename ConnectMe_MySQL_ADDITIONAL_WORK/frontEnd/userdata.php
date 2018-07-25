<?php
include_once 'dbconnect.php';
session_start();
if(isset($_SESSION["user_Id"])) {
  echo "Your session is running " . $_SESSION["user_Id"];
}
else{
  header("Location: index.html");
}
// Fetching Values From URL
$userId = $_SESSION["user_Id"];
$firstname2 = $_POST['firstname'];
$lastname2 = $_POST['lastname'];
$profilepicturefile2 = $_POST['profilepicturefile'];
$location2 = $_POST['location'];
$interest6 = $_POST['interesta'];
$interest7 = $_POST['interestb'];
$interest8 = $_POST['interestc'];
$interest9 = $_POST['interestd'];
$interest0 = $_POST['intereste'];
$professsion2 = $_POST['profession'];
$websitelink2 = $_POST['websitelink'];


if (isset($_POST['websitelink']))
{
$query = "INSERT INTO userdata(user_Id, firstname, lastname, profilepicture, location, interesta, interestb, interestc, interestd, intereste, profession, websitelink) VALUES ('$userId','$firstname2', '$lastname2', '$profilepicturefile2', '$location2', '$interest6', '$interest7', '$interest8', '$interest9', '$interest0', '$professsion2', '$websitelink2')"; //Insert Query

if($conn->query($query) === TRUE) {
echo "Form Submitted succesfully";
}
else{
	echo "Error: " . $query . "<br>" . $conn->error;
}

}
$conn->close(); // Connection Closed
?>
