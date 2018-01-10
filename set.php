<?php 

$user = $_POST['username'];
$pass = $_POST['pass'];


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

$sql = "SELECT * FROM user where userName = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $password = $row['userPassword'];
        $role = $row['userRole'];
        $name = $row['fullName'];
    }
} else {
    header('Location:login.php');
}


if ($password === $pass) {
	session_start();
	$_SESSION['login'] = 1;
	$_SESSION['fullName'] = $name;
	$_SESSION['role'] = $role;
	header('Location:index.php');
}


$conn->close();


 ?>