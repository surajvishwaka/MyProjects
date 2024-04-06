<?php
session_start();

include("dbconnect.php");

$email = $_SESSION['email'];


$otp = $_POST['user_otp'];
$sql = "SELECT * FROM `users` WHERE user_email = '$email' AND user_otp='$otp'";
$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if (mysqli_num_rows($rs) > 0) {
    $sql = "UPDATE `users` SET user_otp = '' WHERE user_email = '$email'";
    $rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    header("location:index3.php?msg=" . $email . "");
} else {
    header("location:verify1.php?msg=OTP is Invalid please try again!");
}

?>
