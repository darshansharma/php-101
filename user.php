<?php
$name = $_POST["username"];
$email = $_POST["useremail"];
$password = $_POST["userpassword"];


$servername = "localhost";
$dbusername = "sanjeev123";
$dbpassword = "sanjeev123!@#";
$dbname = "REALFIRSTDATABASE";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO CUSTOMERINFORMATION (NAME, EMAIL , PASSWORD)
VALUES ('".$name."', '".$email."', '".$password."');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
