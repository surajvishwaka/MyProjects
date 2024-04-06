<?php
session_start();
include("dbconnect.php");
if ($_REQUEST['act'] == "logout2") {
    user_logout();
}
function user_logout()
{
    if (isset($_SESSION['email'])) {
        $_SESSION['email'] = "";
        session_destroy();
        header("location:email_verification.php?msg=User Email Logged Out!!");
    }
}
?>