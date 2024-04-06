<?php
$host = "127.0.0.1:3308";
$username = "root";
$pass = "";
$db_name = "otp_login";
$conn = mysqli_connect($host, $username, $pass, $db_name);

if (!$conn) {
    echo "Connection failed" . mysqli_connect_error();
}
?>