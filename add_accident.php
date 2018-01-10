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

$date = $_POST['date'];
$time = $_POST['time'];
$location = $_POST['location'];
$reason = $_POST['reason'];
$injuries = $_POST['injuries'];
$death = $_POST['death'];
$vehicle = $_POST['vehicle'];
$submited = $_POST['submited'];


$sql = "INSERT INTO accident (acdate, actime, aclocation, reason, death, injuries, vehicle, submitedby)
VALUES ('$date', '$time', '$location', '$reason', '$injuries', '$death', '$vehicle', '$submited')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>