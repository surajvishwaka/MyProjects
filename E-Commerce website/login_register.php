<?php
// session_start();
// session_unset();
// session_destroy();
// header("location: index2.php");
require('connection1.php');
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email, $v_code)
{
    require('PHPMailer/PHPMailer.php');
    require('PHPMailer/SMTP.php');
    require('PHPMailer/Exception.php');

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'suraj.vishwakarma5708@gmail.com';                     //SMTP username
        $mail->Password   = 'cllsuhbldaljazvy';                            //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('suraj.vishwakarma5708@gmail.com', 'Vishwakarma');
        $mail->addAddress($email);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Password Reset Link from Vishwakarma';
        $mail->Body    = "Thanks, Registration.<br>
                 Click the link to verification: <br>
                 <a href='http://localhost/vishwakarma_business/verify.php?email=$email&v_code=$v_code'>verify</a><br>
                 <img src='images/vslogo.png'>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

#for login
if (isset($_POST['login'])) {
    $query = "SELECT * FROM `registered_users` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['is_verified'] == 1) {
                if (password_verify($_POST['password'], $result_fetch['password'])) {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['username'] = $result_fetch['username'];

                    if (isset($_POST['remember_me'])) {
                        setcookie('email_username', $_POST['email_username'], time() + (60 * 60 * 24));
                        setcookie('password', $_POST['password'], time() + (60 * 60 * 24));
                    } else {
                        setcookie('email_username', '', time() - (60 * 60 * 24));
                        setcookie('password', '', time() - (60 * 60 * 24));
                    }
                    header("location: index2.php");
                } else {
                    echo "
                        <script>
                            alert('Incorrect Password');
                            window.location.href='index.php';
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Email not Verified');
                        window.location.href='index.php';
                    </script>
                ";
            }
        } else {
            echo "
                <script>
                    alert('Email or Username Not Registered');
                    window.location.href='index.php';
                </script>
            ";
        }
    } else {
        echo "
                <script>
                    alert('Cannot run query');
                    window.location.href='index.php';
                </script>
            ";
    }
}

#for registration
if (isset($_POST['register'])) {
    $user_exist_query = "SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result = mysqli_query($conn, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) #it will be executed if username or email is already taken.
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username']) {
                #error for username already registered
                echo "
                    <script>
                        alert('$result_fetch[username] - Username already taken');
                        window.location.href='index.php';
                    </script>
                ";
            } else {
                #error for email already registered
                echo "
                    <script>
                        alert('$result_fetch[email] - Email already taken');
                        window.location.href='index.php';
                    </script>
                ";
            }
        } else #it will be executed if no one has taken username or email before.
        {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $v_code = bin2hex(random_bytes(16));
            $query = "INSERT INTO `registered_users` (`full_name`, `username`, `email`, `password`,`verification_code`, `is_verified`) VALUES ('$_POST[full_name]','$_POST[username]','$_POST[email]','$password','$v_code','0')";

            if (mysqli_query($conn, $query) && sendMail($_POST['email'], $v_code)) {
                #if data inserted successfully.
                echo "
                    <script>
                        alert('Registered Successfully');
                        window.location.href='index.php';
                    </script>
                ";
            } else {
                #if data cannot be inserted.
                echo "
                    <script>
                        alert('Server down 404 Not Found!');
                        window.location.href='index.php';
                    </script>
                ";
            }
        }
    } else {
        echo "
                <script>
                    alert('Cannot run query');
                    window.location.href='index.php';
                </script>
            ";
    }
}
