<?php
	$pagename = "Add New User";
	include('files/head.php');
?>			

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accident";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userName = $_POST['username'];
$userPassword = $_POST['password'];
$userRole = $_POST['role'];
$fullName = $_POST['fullname'];
$designation = $_POST['designation'];



$sql = "INSERT INTO user (userName, userPassword, userRole, fullName, designation)
VALUES ('$userName', '$userPassword', '$userRole', '$fullName', '$designation')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Please Chose Unique Username";
}

$conn->close();


?>


<?php
	include('files/footer.php');
?>			
