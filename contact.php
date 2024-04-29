<?php
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "web_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt->execute();

echo "Message sent successfully";
header("Location: home.html");

$stmt->close();
$conn->close();
?>
