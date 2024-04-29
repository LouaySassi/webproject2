<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "web_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, destination, check_in, check_out) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $phone, $destination, $check_in, $check_out);


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$destination = $_POST['destination'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];

$stmt->execute();

echo "New records created successfully";
header("Location: home.html");

$stmt->close();
$conn->close();
?>
