<?php
require("connection1.php");
session_start();

if (isset($_COOKIE['email_username']) && isset($_COOKIE['password'])) {
    $id = $_COOKIE['email_username'];
    $pass = $_COOKIE['password'];
} else {
    $id = "";
    $pass = "";
}
?>

<?php
//Include Configuration File
include('config.php');
$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if (isset($_GET["code"])) {
    //It will Attempt to exchange a code for an valid authentication token.
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
    if (!isset($token['error'])) {
        //Set the access token used for requests
        $google_client->setAccessToken($token['access_token']);

        //Store "access_token" value in $_SESSION variable for future use.
        $_SESSION['access_token'] = $token['access_token'];

        //Create Object of Google Service OAuth 2 class
        $google_service = new Google_Service_Oauth2($google_client);

        //Get user profile data from google
        $data = $google_service->userinfo->get();

        //Below you can find Get profile data and store into $_SESSION variable
        if (!empty($data['given_name'])) {
            $_SESSION['user_first_name'] = $data['given_name'];
        }

        if (!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if (!empty($data['email'])) {
            $_SESSION['user_email_address'] = $data['email'];
        }

        if (!empty($data['gender'])) {
            $_SESSION['user_gender'] = $data['gender'];
        }

        if (!empty($data['picture'])) {
            $_SESSION['user_image'] = $data['picture'];
        }
    }
}
//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if (!isset($_SESSION['access_token'])) {
    //Create a URL to obtain user authorization
    $login_button = '<a href="' . $google_client->createAuthUrl() . '">
        <img src="images/search.png" class="img-fluid" id="imgoauth" />     
    </a>
    <h6 class="mt-2">Login with Google</h6>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/vslogos.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Josefin+Sans:ital@1&family=Jost:wght@100&family=Merienda:wght@400;700&family=Orbitron:wght@500&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Josefin+Sans:ital@1&family=Merienda:wght@400;700&family=Orbitron:wght@500&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>V ARCHITECT</title>

    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all 0.15s ease;
        }

        :root {
            --color-primary: #fff;
            --color-secondary: #000;
            --color-proton: #d3d3d3;
        }

        .dark {
            --color-primary: #111722;
            --color-secondary: #fff;
            --color-proton: #676767;

        }

        /* dark mode start */

        body {
            background-color: var(--color-primary);
            color: var(--color-secondary);
        }

        #nav-mode_switch {
            background: transparent;
            outline: none;
            color: var(--color-secondary);
            border: none;
            padding: 8px;
            cursor: pointer;
        }

        body.dark #nav-mode_switch .fa-sun {
            display: none;
        }

        body.dark #nav-mode_switch .fa-moon {
            display: block;
        }

        #nav-mode_switch .fa-moon {
            display: none;
        }

        #navc8 {
            background-color: var(--color-primary);
            color: var(--color-secondary);
        }

        nav {
            background-color: var(--color-primary);
            color: var(--color-secondary);
        }

        /* dark mode end */

        .text-center {
            text-align: center;
        }

        .btn:hover {
            background-color: rgb(57, 57, 57);
        }

        .fixed {
            height: 50px;
            width: 160px;
            background-color: #14c14b;
            position: fixed;
            bottom: 0;
            right: -137px;
            z-index: 2;
            transition: all .9s ease;
        }

        .fixed:hover {
            transform: translateX(-137px);
        }

        nav {
            z-index: 10;
        }

        .p {
            position: relative;
            top: 30px;
        }

        .hid {
            display: none;
        }

        #ls {
            letter-spacing: 5px;
            color: #0064b6;
        }

        #span1 {
            color: var(--color-secondary);
            font-weight: 900;
            font-family: Arial, Helvetica, sans-serif;
        }

        #a1 {
            font-family: 'Josefin Sans';
            font-weight: 800;
        }

        .bi-person-fill:hover {
            color: #01D3D0;
            cursor: pointer;
        }

        .bi-person-fill {
            transition: all ease-in-out 0.2s;
        }

        #bg-flat {
            background-image: url("images/decor1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .bg-white {
            transition: all ease-in-out 2s;
        }

        .foothover:hover {
            transform: scale(1.1);
            transition: all ease-in-out 0.2s;
        }

        @media screen and (max-width: 576px) {
            #foot {
                font-size: 2.3vw;
                text-align: center;
            }

            .btn {
                width: 100%;
            }

            #over {
                overflow-x: scroll;
                height: 270px;
                display: flex;
                flex-direction: row;
            }

            .hid {
                display: block;
            }

            #ls {
                letter-spacing: 2px;
                color: #0064b6;
            }

            #inboxbadge {
                width: 62px;
                display: block;
                text-align: center;
                margin-top: 10px;
            }

            #zzr {
                display: none;
            }

            #std {
                list-style: none;
                display: flex;
                margin: 0;
                padding: 0;

                align-items: center;
                justify-content: space-evenly;
            }

            #we {
                padding: 34px;
                border-radius: 10px;
            }

            .elli {
                display: none;
            }
        }

        #signupp {
            background-color: #04AA6D;
            color: white;
            padding: 8px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            margin-left: 5px;
            transition: all ease .9s;
        }

        #signupp:hover {
            background-color: #008b58;
        }

        #modul {
            width: 550px;
            height: 580px;
            background-color: rgb(255, 255, 255);
        }

        #modul h1 {
            text-align: center;
            padding: 8px;
            font-size: 2rem;
        }

        .signdiv {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .signdiv button:first-child,
        .signdiv button:last-child {
            width: 200px;
        }

        #google {
            width: 30px;
        }

        .socialmedia {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }

        @media screen and (max-width: 992px) {
            #zzr {
                display: none;
            }
        }

        @media screen and (max-width: 576px) {
            #modul {
                display: flex;
                flex-direction: column;
                width: 300px;
                height: 550px;

            }

            .form-check {
                font-size: 0.9rem;
            }

            .expps {
                display: flex;
                align-items: center;
                width: 200px;
                justify-content: space-between;
            }

            .user {
                display: flex;
                justify-content: center;
            }

            .s {
                font-size: 15px;
            }

            #inboxbadge {
                width: 35px;
                display: none;
                text-align: center;
                margin-top: 10px;
            }

            #zzr {
                display: none;
            }

            .buttonContainerr .dropdown button {
                display: none;
            }

            #pixk {
                text-align: center;
                margin: 12px 0px;
            }

            .liy {
                padding: 0px 4px;

            }

            .signdiv {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            .signdiv a {
                margin-bottom: 10px;
            }

            .signdiv button:last-child {
                margin-top: 10px;
            }

            .socialmedia a {
                text-decoration: none;
                border: 1px solid black;
                border-radius: 25px;
                padding: 10px;
                margin-bottom: 15px;
                color: black;
            }

            .forgot-btn {
                margin-top: -10px;
            }
        }

        #id01 {
            padding-top: 20px;
        }

        #id05 {
            margin-top: 68px;
        }

        .close {
            font-size: 30px;
            cursor: pointer;
            border: 1px solid black;
            border-radius: 50%;
            background-color: black;
            color: white;
            height: 30px;
            width: 30px;
            display: block;
            position: relative;
            top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user {
            color: #ffffff;
            background-color: #000000;
            padding: 5px 15px;
            border-radius: 5px;
            font-weight: 500;
        }

        .user:hover {
            background-color: #000000;
        }

        .user a {
            color: #ffffff;
            text-decoration: none;
        }

        .forgot-btn {
            text-align: right;
        }

        .forgot-btn button {
            border: none;
            background-color: transparent;
            outline: none;
            cursor: pointer;
            font-family: 450;
            margin-top: 10px;
        }

        #welcomes {
            position: absolute;
            left: 1%;
            top: 40%;
            z-index: 1000;
            width: 100%;
            color: white;
        }

        #dynamic {
            color: #00c3c0;
            font-size: 5rem;
        }

        .img-circle {
            border-radius: 50%;
        }

        #googleauth {
            width: 30px;
            margin-top: -115px;
        }

        /* profile  */
        #myprof {
            font-size: 1.5rem;
        }

        .buttonContainerr {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #googleac {
            width: 350px;
            word-wrap: break-word;
        }

        #imgoauth {
            width: 50px;

        }

        #exlog {
            width: 20px;
        }

        /* underline hovering navbar start */
        .navbar-collapse ul li a {
            position: relative;
            display: flex;
            align-items: center;
            font-size: 14px;
            margin: 5px 8px;
            padding-right: 5px;
        }

        .navbar-collapse ul li a::after {
            content: '';
            width: 0;
            height: 1.5px;
            background-color: var(--color-secondary);
            position: absolute;
            bottom: -15px;
            transition: width 0.3s;
        }

        .navbar-collapse ul li a:hover::after,
        .navbar-collapse ul li a.active-link::after {
            width: 100%;
        }

        .nav-item a span {
            padding-right: 5px;
        }

        /* underline hovering navbar end */
        .expps {
            margin-top: 3px;
            width: 232px;
        }

        #navc8 {
            display: flex;
            align-items: center;
        }

        #signupp1 {
            background-color: black;
            color: white;
            padding: 8px 30px;
            border: none;
            cursor: pointer;
            opacity: 0.9;
            transition: all ease .9s;
            border: 1px solid var(--color-secondary);
        }

        #signupp1:hover {
            background-color: #404040;
        }

        #signupp2 {
            background-color: white;
            color: black;
            padding: 7px 20px;
            border: 1px solid black;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            transition: all ease .9s;
        }

        #signupp2:hover {
            background-color: #404040;
            color: white;
        }

        .dropdown button {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 115px;
        }

        #changehoverfooter {
            color: #9CA3AF;
            font-size: 23px;
        }

        #changehoverfooter:hover {
            color: #82868d;
        }

        #parachangehover {
            color: #565656;
        }

        #parachangehover:hover {
            color: #000000;
        }

        #specialfont {
            color: var(--color-secondary);
            font-weight: 900;
            font-family: Arial, Helvetica, sans-serif;
        }

        .t {
            position: relative;
            font-size: 28px;
            font-weight: 600;
            top: 35px;
            font-family: sans-serif;
            color: var(--color-secondary);
            letter-spacing: -1px;
        }

        .flexcluoin {
            display: flex;
            flex-direction: column;
        }

        .space {
            padding: 10px;
        }

        .socialmedia a {
            text-decoration: none;
            display: block;
            border: 2px solid grey;
            border-radius: 25px;
            padding: 10px;
            color: black;
        }

        footer div {
            color: var(--color-secondary);
            background-color: var(--color-primary);
            font-size: small;
        }

        .form-label {
            color: black;
        }

        #modul h1 {
            color: #000;
        }

        /* .ellii {
            position: fixed;
            top: 0;
            right: 0;
            width: 500px;
        }

        .elli {
            position: fixed;
            top: 0;
            left: 0;
            width: 500px;
        } */
    </style>
</head>

<body class="" data-bs-theme="dark">
    <div class="fixed rounded-pill d-flex align-items-center justify-content-evenly mb-4 mx-4 shadow d-none d-lg-block d-lg-flex">
        <a href="https://wa.me/919356562998" target="_blank" class="text-decoration-none d-flex align-items-center justify-content-between">
            <i class="bi bi-whatsapp text-white fs-3"></i>
            <a class="text-decoration-none" href="https://wa.me/919356562998" target="_blank">
                <p class="pt-3 fw-bold text-white">Chat With Us</p>
            </a>
        </a>
    </div>

    <!-- Navbar 1 -->
    <div id="typed-text"> </div>

    <nav class="navbar navbar-expand-lg navbar-dark position-sticky top-0">
        <div class="container-fluid">
            <div class="container">
                <div class="row" id="navc8">
                    <div class="col-lg-3" id="pixk">
                        <img src="images/vslogo.png" class="img-fluid ms-3" style="width: 35px;">
                        <a id="a1" class="navbar-brand" href="index.php"><span id="span1">VISHWAKARMA</span></a>
                        <!-- <button class="navbar-toggler shadow-none border-0" id="btntog" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> -->
                    </div>

                    <div class="col-lg-5">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-center">
                                <li class="nav-item" id="zzr">
                                    <a class="nav-link active-link" style="color: var(--color-secondary);" aria-current="page" href="index.php"><span><i class="fa-solid fa-house"></i></span>Home</a>
                                </li>
                                <li class="nav-item" id="zzr">
                                    <a class="nav-link" style="color: var(--color-secondary);" href="about.php"><span><i class="fa-solid fa-circle-info"></i></span>About</a>
                                </li>
                                <li class="nav-item" id="zzr">
                                    <a class="nav-link" style="color: var(--color-secondary);" href="services.php"><span><i class="fa-solid fa-screwdriver-wrench"></i></span>Services</a>
                                </li>
                                <li class="nav-item" id="zzr">
                                    <a class="nav-link" style="color: var(--color-secondary);" href="product.php"><span><i class="fa-solid fa-cart-shopping"></i></span>Product</a>
                                </li>
                                <li class="nav-item" id="zzr">
                                    <a class="nav-link" style="color: var(--color-secondary);" href="contact.php"><span><i class="fa-solid fa-square-phone"></i></span>Contact</a>
                                </li>
                            </ul>

                            <!-- <div class="justify-content-between align-items-center">
                                <button class="rounded" id="signupp" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                                <button class="rounded bg-danger" id="signupp" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Register</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="buttonContainerr">
                            <!-- Profile menu dropdown list -->
                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle shadow-none py-1 px-2 m-2 btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-regular fa-circle-user" id="myprof"></i> Account
                                </button>
                                <ul class="dropdown-menu p-3 mt-3" id="googleac">
                                    <!-- Google Authentication page -->
                                    <h4 class="text-center">Google Account</h4>
                                    <hr>
                                    <div class="panel panel-default text-center">
                                        <?php
                                        if ($login_button == '') {
                                            echo '<div class="panel-heading">Welcome, <br> VISHWANIRMAAN PVT LTD <br> </div><div class="panel-body">';
                                            echo '<img src="' . $_SESSION["user_image"] . '" class="img-responsive img-circle img-thumbnail" />';
                                            echo '<h3 class="mt-2" style="font-size: 1rem; text-align:left;"><b>Name :</b> ' . $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'] . '</h3>';
                                            echo '<h3 class="mt-2" style="font-size: 1rem; text-align:left;"><b>Email :</b> ' . $_SESSION['user_email_address'] . '</h3>';
                                            echo '<hr><h5 style="text-align:left;"><a href="logout.php" style="text-decoration: none; color: black;"><img id="exlog" src="images/logout.png" class="img-fluid"/>Logout</a></h5></div>';
                                        } else {
                                            echo '<div align="center">' . $login_button . '</div>';
                                        }
                                        ?>
                                        <!-- <h6 class="text-center">Login with Google</h6> -->
                                    </div>

                                    <!-- <li><a class="dropdown-item" href="#">Logout</a></li> -->
                                </ul>
                            </div>
                            <?php
                            if ($login_button == $login_button) {
                                echo '';
                            }
                            ?>

                            <?php
                            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                                echo "
                                    <div class='user'>
                                        $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
                                    </div>
                                ";
                            } else {
                                echo "
                                    <div class='justify-content-between align-items-center expps'>
                                    <button class='rounded btn-sm' id='signupp1' onclick=\"document.getElementById('id01').style.display='block'\" >Login</button>
                                    <button class='rounded btn-sm' id='signupp2' onclick=\"document.getElementById('id05').style.display='block'\" style='width:auto;'>Register</button>
                                        <!-- mycart button -->
                                        <button type='button' id='nav-mode_switch'>
                                            <i class='fas fa-sun'></i>
                                            <i class='fas fa-moon'></i>
                                        </button>
                                    </div>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!--Login Modal -->
                    <div id="id01" class="modal mt-5">
                        <div class="container" id="modul">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <h1>Login</h1>
                            <form class="modal-content border-0" action="login_register.php" method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email or username</label>
                                    <input required type="text" name="email_username" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input required type="password" name="password" class="form-control shadow-none" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="remember_me" class="form-check-input shadow-none" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1" style="color: #000;">Remember me</label>
                                    <!-- <a href="" style="float:right; text-decoration:none;">Forgot password?</a> -->
                                </div>
                                <div class="signdiv">
                                    <button type="submit" name="login" class="btn text-white" style="background-color: #04AA6D;">LOGIN</button>
                                    <button type="reset" class="btn shadow-none text-white bg-danger">RESET</button>
                                </div>
                                <hr style="margin: 1rem 0;">
                                <div class="socialmedia mt-3">
                                    <a href="email_verification.php">LOGIN WITH OTP</a>
                                </div>
                            </form>
                            <div class="forgot-btn">
                                <!-- <button type="button">Forgot Password?</button> -->
                                <button class="rounded" id="signup" onclick="document.getElementById('id06').style.display='block'">Forgot Password?</button>
                            </div>
                        </div>
                    </div>

                    <!-- Register Modal -->
                    <div id="id05" class="modal">
                        <div class="container" id="modul">
                            <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <h1>User Register</h1>
                            <form class="modal-content border-0" action="login_register.php" method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Full name</label>
                                    <input type="text" name="full_name" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" required autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control shadow-none" id="exampleInputPassword1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control shadow-none" id="exampleInputPassword1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control shadow-none" id="exampleInputPassword1" required>
                                </div>
                                <div class="signdiv">
                                    <button type="submit" name="register" class="btn shadow-none text-white" style="background-color: #04AA6D;">REGISTER</button>
                                    <button type="reset" class="btn shadow-none text-white bg-danger">RESET</button>
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>

                    <!-- Forgot Password -->
                    <div id="id06" class="modal mt-5">
                        <div class="container mt-4" id="modul">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <h1>RESET PASSWORD</h1>
                            <form class="modal-content border-0" action="forgotpassword.php" method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input autofocus type="email" name="email" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="signdiv">
                                    <button type="submit" name="send-reset-link" class="btn shadow-none text-white reset-btns" style="background-color: #04AA6D;">SEND LINK</button>
                                    <button type="reset" class="btn shadow-none text-white bg-danger">RESET</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper -->

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="swiper mySwiper mt-5" style="border-radius: 25px;">
                    <?php
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                        // Home Page 
                        echo "
                            <h1 class='text-center' id='welcomes'>
                                WELCOME TO VISHWAKARMA WEBSITE - $_SESSION[username]
                            </h1>
                        ";
                    }
                    ?>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/2.png" class="w-100 d-block crop" />
                        </div>
                        <div class="swiper-slide" style="height: 100px;">
                            <img src="images/1.png" class="w-100 d-block crop" />
                        </div>
                        <div class="swiper-slide" style="height: 100px;">
                            <img src="images/6.png" class="w-100 d-block crop" />
                        </div>
                        <div class="swiper-slide" style="height: 100px;">
                            <img src="images/5.png" class="w-100 d-block crop" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none">
        <img src="images/Ellipse3.png" class="img-fluid ellii" style="float: right;">
        <img src="images/Ellipse4.png" class="img-fluid elli" style="float: left;">
    </div>
    <!-- Product Categories -->

    <div class="container-fluid">
        <div class="container">
            <h1 class="text-center mt-5" id="specialfont">Series of ACP Designs</h1>
            <p class="text-center" id="ls">ALUMINIUM COMPOSITE PANEL</p> <br>
            <p class="text-center">Whatever type of ACP sheet you want, you will get it here according to your mind,
                please contact here. <br> Whatever is the material of aluminum and whatever is its measurement, according to
                each
                and every measurement, you will
                get ACP sheets here.
            </p>
        </div>
        <div class="container">
            <h3 class="p t">Wooden Series</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/wood1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Burn Walnut</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/wood2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Ebony</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/wood3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Palisandro Brown</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/wood4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">California Walnut</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">American Walnut</h5>
                </div>
                <div class="card border-0 foothover hid" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>

            <h3 class="p t">Authentic Texture</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/auth1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Slate Stone Black</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/auth2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Glistening Snow</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/auth3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Terracotta Orange Brown</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/auth4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Beige Grey</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/auth5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Dark Oxide</h5>
                </div>
                <div class="card border-0 foothover hid" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>

            <h3 class="p t">Solid Series</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/solid1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Lake Blue</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/solid2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Red</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/solid3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Yellow</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/solid4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Tomato Red</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/solid5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Traffic Yellow</h5>
                </div>
                <div class="card border-0 foothover hid" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>

            <h3 class="p t">Metallic Series</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/met1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Spotted Concrete</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/met2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Carbon Zoom</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/met3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Titanium Brush</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/met4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Gold Brush</h5>
                </div>
                <div class="card border-0 foothover" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/met5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Elox Umber Brush</h5>
                </div>
                <div class="card border-0 foothover hid" style="width: 190px; background-color: var(--color-primary);">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer section -->

    <footer class="text-center text-lg-start bg-body-tertiary text-muted" style="margin-top: 100px;">

        <section class="">
            <div class="container text-center text-md-start mt-5" style="border-radius: 10px; border: 1px solid var(--color-proton);">

                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <img style="width: 50px;" class="img-fluid" src="images/vslogo.png"><span id="span1">Vishwakarma</span>
                        </h6>
                        <p>
                            VISHWANIRMAAN PVT LTD this is the 'materail ACP' Providing electronic commerce company
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a style="text-decoration: none;" href="#" class="text-reset">Wooden Series</a>
                        </p>
                        <p>
                            <a style="text-decoration: none;" href="#!" class="text-reset">Silicon</a>
                        </p>
                        <p>
                            <a style="text-decoration: none;" href="#!" class="text-reset">Aluminium</a>
                        </p>
                        <p>
                            <a style="text-decoration: none;" href="#!" class="text-reset">Glass</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-3">
                            Useful links
                        </h6>
                        <p class="m-0">
                            <a class="nav-link active-link text-reset" aria-current="page" href="index.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-house"></i>
                                    </span">
                                    <span>Home</span>
                            </a>
                        </p>
                        <p class="m-0">
                            <a class="nav-link text-reset" href="services.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                    </span">
                                    <span>Services</span>
                            </a>
                        </p>
                        <p class="m-0">
                            <a class="nav-link text-reset" href="product.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    </span">
                                    <span>Product</span>
                            </a>
                        </p>
                        <p class="m-0">
                            <a class="nav-link text-reset" href="contact.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-square-phone"></i>
                                    </span">
                                    <span>Contact</span>
                            </a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i>Central Naka Rd Indira Nagar, M G M, Aurangabad, Maharashtra</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            suraj.vishwakarma5708@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 91 88884 68357</p>
                        <p><i class="fas fa-print me-3"></i> + 91 93565 62998</p>
                    </div>

                </div>

                <div class="text-center mb-4">
                    <a class="text-reset me-4" href="https://wa.me/919356562998" target="_blank">
                        <i class="bi bi-whatsapp mx-1"></i>
                    </a>
                    <!-- <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a> -->
                    <!-- <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a> -->
                    <!-- <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a> -->
                    <!-- <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a> -->
                    <a href="http://www.linkedin.com/in/shubhamvishwakarma185585275" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/shubham431001" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>

            </div>

        </section>

        <!-- Copyright -->
        <div class="text-center p-4">
            © 2024 Copyright: Vishwakarma-Architect. All Rights Reserved | Design by Suraj Vishwakarma
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Vishwamaterial.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- mobile device navbar  -->

    <div class="container-fluid d-sm-none" style="
    position: sticky;
    bottom:0; background-color:white; 
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 87px -10px;
    ">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <ul class=" d-flex text-center" style="list-style: none; margin:0; position:relative; right:3px; padding:0;">
                        <li class="nav-item s">
                            <a class="nav-link active-link text-dark" aria-current="page" href="index.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-house"></i>
                                    </span">
                                    <span style="font-size: xx-small;">Home</span>
                            </a>
                        </li>
                        <li class="nav-item s">
                            <a class="nav-link text-dark" href="services.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                    </span">
                                    <span style="font-size: xx-small;">Services</span>
                            </a>
                        </li>
                        <li class="nav-item s">
                            <a class="nav-link text-dark" href="product.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    </span">
                                    <span style="font-size: xx-small;">Product</span>
                            </a>
                        </li>
                        <li class="nav-item s">
                            <a class="nav-link text-dark" href="contact.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-square-phone"></i>
                                    </span">
                                    <span style="font-size: xx-small;">Contact</span>
                            </a>
                        </li>
                        <li class="nav-item s">
                            <a class="nav-link text-dark" href="mycart.php">
                                <span class="d-block">
                                    <i class="bi bi-cart-check-fill text-dark"></i>
                                </span>
                                <span style="font-size: xx-small;">Cart</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });

        var modal = document.getElementById('id01');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var modal = document.getElementById('id06');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // theme changer
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('nav-mode_switch').addEventListener('click', () => {
                document.body.classList.toggle('dark');

                localStorage.setItem(
                    'theme',
                    document.body.classList.contains('dark') ? 'dark' : 'light'
                );
            });

            if (localStorage.getItem('theme') === 'dark') {
                document.body.classList.add('dark');
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
            if (disclaimer) {
                disclaimer.remove();
            }
        });
    </script>

    <script>
        var typed = new Typed('#typed-text', {
            strings: ['This is some automatically typed text.', 'You can add multiple strings here.'],
            typeSpeed: 40, // Adjust typing speed (characters per second)
            backSpeed: 10, // Adjust backspace speed (characters per second)
            loop: true // Set to true for continuous typing
        });
    </script>

</body>

</html>