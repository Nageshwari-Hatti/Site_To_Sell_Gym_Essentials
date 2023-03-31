<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)) {
    if (!empty($password)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "gym_essential";

        // Connecting to database
        $conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_errno()) {
            die('Connect Error ('. mysqli_connect_errno() .')'. mysqli_connect_errno());
        } else {
            $sql = "INSERT INTO `user_login` (`username`, `password`) values('$username','$password')";
            if ($conn->query($sql)) {
                echo "New record is inserted sucessfully";
            } else {
                echo "Error: " .$sql. "<br>" .$conn->error;
            }
            $conn->close();
        }

    } else {
        echo "Password Should not be empty";
        die();
    }
} else {
    echo "Username should not be empty";
    die();
}
?>