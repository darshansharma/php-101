<?php
$email = $_POST["useremail"];
$password = $_POST["userpassword"];

$servername = "localhost";
$dbusername = "sanjeev123";
$dbpassword = "sanjeev123!@#";
$dbname = "REALFIRSTDATABASE";

// Create connection
$conn=mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT * FROM CUSTOMERINFORMATION WHERE EMAIL = '".$email."' AND PASSWORD = '".$password."';";
//echo $sql;
$result=mysqli_query($conn, $sql);
//echo $result;
if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);

    echo"welcome ".$row['NAME'];
}
else {
    echo "0 results";
  }
  


mysqli_close($conn);
?>