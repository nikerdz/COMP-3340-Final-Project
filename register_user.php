<?php
$servername = "myweb.cs.uwindsor.ca";
$username = "khan661_COMP_3340";
$dbname = "khan661_COMP_3340";
$password = "wLfsT6nFcA6qSrLHph4X";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (first_name, last_name, address, phone_number, email, password) 
        VALUES ('$firstName', '$lastName', '$address', '$phoneNumber', '$email', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    header("Location: register-success.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
