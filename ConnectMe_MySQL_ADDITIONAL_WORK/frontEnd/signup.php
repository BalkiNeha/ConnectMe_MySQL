<?php
// Fetching Values From URL
session_start();
include_once 'dbconnect.php';
// if( !isset($_SESSION['user']) ) {
// 	header("Location: index.html");
// 	exit;
// }
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$var = "email";

if (isset($_POST['email'])) {
	$select = mysqli_query($conn, "SELECT email_Id FROM users	WHERE email_Id = '".$_POST['email']."'") or exit(mysqli_error($conn));
	if(mysqli_num_rows($select)) {
		$var;
	}else{
		$query = "INSERT INTO users(email_Id, username, password, gender) VALUES ('$email', '$username', '$password', '$gender')"; //Insert Query
		if($conn->query($query) === TRUE) {
			$result = mysqli_query($conn,"SELECT user_Id FROM users WHERE email_Id = '$email'");
			$row = mysqli_fetch_array($result);
			if(is_array($row)){
				$_SESSION["user_Id"] = $row["user_Id"];
				echo $_SESSION["user_Id"];
			}
		} else{
			echo "Error: " . $query . "<br>" . $conn->error;
		}
	}
}
?>
