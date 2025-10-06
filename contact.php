<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$conn = mysqli_connect("localhost", "root", "", "contactform");
$uname = $_GET['uname'];
$subject = $_GET['subject'];
?>