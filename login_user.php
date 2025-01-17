<?php
$servername = "myweb.cs.uwindsor.ca";
$username = "khan661_COMP_3340";
$password = "wLfsT6nFcA6qSrLHph4X";
$dbname = "khan661_COMP_3340";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['first_name'] = $row['first_name'];
        header("Location: login-success.php");
        exit();
    } else {
        header("Location: incorrect-password.html");
    }
} else {
    header("Location: not-found.html");
}

$conn->close();
?>
