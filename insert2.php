<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corona";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$country = $_POST["country"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$gender = $_POST["gender"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (fname, lname, email, mobile, address1, address2, country, state, zip, gender )
VALUES ('$fname','$lname', '$email','$mobile', '$address1', '$address2', '$country', '$state', '$zip', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "Your application has been submitted successfully.Kindly check your email id for more details.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
