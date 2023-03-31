<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) || empty($password)){
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "gym_essential";

// Creating Connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_errno()) {
    die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_errno());
} else {
    $SELECT = "SELECT email From register Where email = ? Limit 1";
    $INSERT = "INSERT Into `user_login` (`username`, `password`) values(?, ?)";

    // Statements
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $email);
    }
}else{
    echo "All fields are require";
    die();
}
?>