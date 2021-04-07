<?php
$servername = "localhost:3308";
$username = "root";
$password = "techouts";
$dbname = "test2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Employee1 (
Name VARCHAR(30) NOT NULL,
Phonenumber CHAR(10) NOT NULL,
Gender CHAR(1) NOT NULL,
dob DATE
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
