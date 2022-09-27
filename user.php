<?php
$name = $_POST["username"];
$email = $_POST["useremail"];
$password = $_POST["userpassword"];
echo $name,$email,$password;

$servername = "localhost";
$username = "sanjeev123";
$password = "sanjeev123!@#";
$dbname = "REALFIRSTDATABASE";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO CUSTOMERINFORMATION (NAME, EMAIL , PASSWORD)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>