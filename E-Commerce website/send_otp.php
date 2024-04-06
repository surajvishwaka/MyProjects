<?php
session_start();
include("dbconnect.php");
include("email.php");
$email = $_POST["user_email"];
$sql = "SELECT * FROM `users` WHERE user_email = '$email'";
$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if (mysqli_num_rows($rs)) {
    $_SESSION['email'] = $email;
    $otp = rand(11111, 99999);
    send_otp($email, "Verify your email on Vishwanirmaan", $otp);
    echo "Email found";
    $sql = "UPDATE `users` SET user_otp = '$otp' WHERE user_email = '$email'";
    $rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    header("location:verify1.php?msg=Plz Check your Email for OTP and Verify.");
} else {
    header("location:email_verification.php?msg=Email is Invalid... Please check Again!");
}
?>