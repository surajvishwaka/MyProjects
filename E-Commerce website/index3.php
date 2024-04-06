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
        }

        .text-center {
            text-align: center;
        }

        .btn:hover {
            background-color: rgb(57, 57, 57);
        }

        .fixed {
            height: 50px;
            width: 160px;
            background-color: #229d04;
            position: fixed;
            bottom: 0;
            right: 0;
            z-index: 1;
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
            color: #01D3D0;
            font-weight: 900;
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

        .bg-light {
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
        }

        #signupp {
            background-color: #04AA6D;
            color: white;
            padding: 7px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
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

        @media screen and (max-width: 576px) {
            #modul {
                display: flex;
                flex-direction: column;
                width: 300px;
                height: 500px;
            }

            .form-check {
                font-size: 0.9rem;
            }

            #expp {
                display: flex;
                align-items: center;
            }

            .user {
                display: flex;
                justify-content: center;
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
            color: #30475e;
            background-color: #01D3D0;
            padding: 5px 15px;
            border-radius: 5px;
            font-weight: 500;
        }

        .user:hover {
            background-color: #00c3c0;
        }

        .user a {
            color: #30475e;
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
        }

        #welcomes {
            background-color: #f0f5ff;
            font-size: 3rem;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin-top: 50px;
        }

        .card {
            background-color: #f0f5ff;
        }

        #dynamic {
            color: #00c3c0;
            font-size: 5rem;
        }

        /* #navbarSupportedContent {
            width: 100px;
        } */

        .searchhcont {
            align-items: center;
            display: contents;
            height: 33px;
        }

        #cartcntt {
            align-items: center;
            justify-content: center;
            width: 351px;
        }

        .formxepp {
            display: flex;
            align-items: center;
            width: 100%;
            background-color: white;
        }

        .formxepp input {
            padding-left: 0px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .fa-xmark {
            padding: 10px;
            cursor: pointer;
        }

        /* search panel */
        .card-panels {
            width: 100%;
            background-color: #f0fffe;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        }

        #email {
            word-wrap: break-word;


        }

        #fhide {
            text-decoration: none;
            color: #f0f5ff;
        }

        #anchor {
            color: #01D3D0;
        }

        #span {
            display: block;
            width: 141px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .spinner_border {
            text-align: center;
        }
    </style>
</head>

<body style="background-color: #f0f5ff;" data-bs-theme="dark">
    <div class="fixed rounded-pill d-flex align-items-center justify-content-evenly mb-4 mx-4 shadow d-none d-lg-block d-lg-flex">
        <a href="https://wa.me/919356562998" target="_blank" class="text-decoration-none d-flex align-items-center justify-content-between">
            <i class="bi bi-whatsapp text-white fs-3"></i>
            <a class="text-decoration-none" href="https://wa.me/919356562998" target="_blank">
                <p class="pt-3 fw-bold text-white">Chat With Us</p>
            </a>
        </a>
    </div>

    <!-- Navbar 2-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-sticky top-0 shadow">
        <div class="container-fluid">
            <img src="images/vslogo.png" class="img-fluid ms-3" style="width: 35px;">
            <a id="a1" class="navbar-brand" href="index.php">VISHWA<span id="span1"> KARMA</span></a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: space-between;">
                <div class="searchhhcont" style="display: contents;">
                    <form class="d-flex" id="forms" autocomplete="off" role="search" style="width: 76%; margin-left: 93px;">
                        <div class="formxepp">
                            <button class="btn shadow-none bg-white text-secondary" style="border: none;" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input autofocus type="text" id="search" class="form-control me-2 shadow-none" oninput="load_data(this.value)" placeholder="Search materials and more...">
                            <i class="fa-solid fa-xmark" id="close_btn"></i>
                        </div>
                    </form>

                    <div class="d-flex" id="cartcntt">
                        <div class='container' style="width: 156px;">
                            <div class='row' style="width: 142px;">
                                <div id="email" class='col text-white'>
                                    <?php
                                    if (isset($_REQUEST['msg'])) {
                                        // echo $_REQUEST['msg'];
                                        echo "
                                        <span id='span'>$_REQUEST[msg]</span>
                                        <a id='anchor' href=logout2.php?act=logout2>
                                           <h4 id='fhide'>Logout</h4>
                                         </a>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <a href="mycart.php" id="inboxbadge">
                            <button type="button" class="btn position-relative shadow-none text-white m-2" style="background-color: #01D3D0; padding: 4px 8px;">
                                <i class="bi bi-cart-check-fill"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    0
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <div class="container" style=" z-index: 1; position:fixed; left: 100px;">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card-panels mt-1 rounded" id="output" style="display: none;">

                </div>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>

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
                                    <input type="text" name="email_username" value="<?php echo $id ?>" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" value="<?php echo $pass ?>" class="form-control shadow-none" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="remember_me" class="form-check-input shadow-none" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                    <!-- <a href="" style="float:right; text-decoration:none;">Forgot password?</a> -->
                                </div>
                                <div class="signdiv">
                                    <button type="submit" name="login" class="btn shadow-none text-white" style="background-color: #04AA6D;">LOGIN</button>
                                    <button type="reset" class="btn shadow-none text-white bg-danger">RESET</button>
                                </div>
                                <hr>
                                <span class="mt-1" style="padding-left: 200px;">or sign in with</span>
                                <div class="socialmedia mt-3">
                                    <img src="images/search.png" id="google" style="cursor:pointer">
                                    <img src="images/facebook.png" id="google" style="cursor:pointer">
                                    <img src="images/twitter.png" id="google" style="cursor:pointer">
                                </div>
                                <p class="text-center mt-4">Not a member?<a href="" style="text-decoration: none;"> Signin</a></p>
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
                                    <input required autofocus type="text" name="full_name" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Username</label>
                                    <input required type="text" name="username" class="form-control shadow-none" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Email</label>
                                    <input required type="email" name="email" class="form-control shadow-none" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input required type="password" name="password" class="form-control shadow-none" id="exampleInputPassword1">
                                </div>
                                <div class="signdiv">
                                    <button type="submit" name="register" class="btn shadow-none text-white" style="background-color: #04AA6D;">REGISTER</button>
                                    <button type="reset" class="btn shadow-none text-white bg-danger">RESET</button>
                                </div>
                                <hr>
                                <p class="text-center mt-4">Not a member?<a href="" style="text-decoration: none;"> Signin</a></p>
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
                                    <input type="email" name="email" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp">
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

    <!-- Product Categories -->

    <div class="container-fluid">
        <div class="container">

            <h1 class="text-center mt-5">Series of ACP Designs</h1>
            <p class="text-center" id="ls">ALUMINIUM COMPOSITE PANEL</p> <br>
            <p class="text-center">Whatever type of ACP sheet you want, you will get it here according to your mind,
                please contact here. <br> Whatever is the material of aluminum and whatever is its measurement, according to
                each
                and every measurement, you will
                get ACP sheets here.
            </p>
        </div>
        <div class="container">
            <h3 class="p">Wooden Series</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/wood1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Burn Walnut</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/wood2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Ebony</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/wood3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Palisandro Brown</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/wood4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">California Walnut</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">American Walnut</h5>
                </div>
                <div class="card bg-light border-0 foothover hid" style="width: 190px;">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>

            <h3 class="p">Authentic Texture</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/auth1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Slate Stone Black</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/auth2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Glistening Snow</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/auth3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Terracotta Orange Brown</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/auth4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Beige Grey</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/auth5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Dark Oxide</h5>
                </div>
                <div class="card bg-light border-0 foothover hid" style="width: 190px;">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>

            <h3 class="p">Solid Series</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/solid1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Lake Blue</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/solid2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Red</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/solid3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Yellow</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/solid4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Tomato Red</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/solid5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Traffic Yellow</h5>
                </div>
                <div class="card bg-light border-0 foothover hid" style="width: 190px;">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>

            <h3 class="p">Metallic Series</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/met1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Spotted Concrete</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/met2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Carbon Zoom</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/met3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Titanium Brush</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/met4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Gold Brush</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/met5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Elox Umber Brush</h5>
                </div>
                <div class="card bg-light border-0 foothover hid" style="width: 190px;">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer section -->

    <footer class="text-center text-lg-start bg-body-tertiary text-muted" style="margin-top: 100px;">


        <section class="">
            <div class="container text-center text-md-start mt-5 border" style="border-radius: 10px;">

                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <img style="width: 50px;" class="img-fluid" src="images/vslogo.png" alt=""><span id="span1">Vishwakarma</span>
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
                        <p class="m-0">
                            <a class="nav-link text-reset" href="mycart.php">
                                <span class="d-block">
                                    <i class="bi bi-cart-check-fill text-reset"></i>
                                    </span">
                                    <span>Cart</span>
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
        <div class="text-center p-4" style="background-color: rgba(255, 255, 255, 0.85); font-size:small;">
            © 2024 Copyright: Vishwakarma-Architect. All Rights Reserved | Design by Suraj Vishwakarma
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Vishwamaterial.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
        // Ajax
        // function load_data(search = '') {
        //     let xhr = new XMLHttpRequest();
        //     xhr.open("GET", "searching.php?search=" + search, true);
        //     xhr.onprogress = function() {
        //         document.getElementById('table_data').innerHTML = `
        //             <div class="spinner-border text-info" role="status">
        //                 <span class="visually-hidden">Loading...</span>
        //             </div>
        //         `;
        //     }
        //     xhr.onload = function() {
        //         document.getElementById('table_data').innerHTML = xhr.responseText;
        //     }
        //     xhr.send();
        // }
        // load_data();

        var close_btn = document.getElementById("close_btn");
        var form = document.getElementById("forms");
        var search_input = document.getElementById("search");
        var output = document.getElementById("output");

        form.addEventListener("submit", submitnot);

        function submitnot(e) {
            e.preventDefault();
        }
        search_input.addEventListener("keydown", (e) => {
            output.style.display = "block";
            output.innerHTML = `
                <div class="spinner-border text-dark" role="status">
                    <span class="visually-hidden vc">Loading...</span>
                </div>
            `;
            q = e.target.value;
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "search.php?q=" + q, true);
            xhr.onload = function() {
                //Status code ok
                if (xhr.status == 200) {
                    output.innerHTML = '';
                    output.innerHTML = xhr.responseText;
                }
            }
            if (q.length >= 0) {
                xhr.send();
            }
            if (q.length == 0) {
                output.innerHTML = '';
                output.style.display = "none";
            }
        })

        close_btn.addEventListener("click", function(e) {
            search_input.value = '';
            output.innerHTML = '';
            output.style.display = "none";
        })
    </script>

</body>

</html>