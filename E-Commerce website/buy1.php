<?php
include 'connectionbill.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/vslogos.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Josefin+Sans:ital@1&family=Jost:wght@100&family=Merienda:wght@400;700&family=Orbitron:wght@500&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Josefin+Sans:ital@1&family=Merienda:wght@400;700&family=Orbitron:wght@500&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
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
        }

        /* payment form  */
        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #04AA6D;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }

            .col-25 {
                margin-bottom: 20px;
            }
        }

        .visa {
            width: 40px;
            cursor: pointer;
        }

        #vishwanirmaanhover {
            transition: all ease .9s;
        }

        #vishwanirmaanhover:hover {
            transform: scale(1.1);
            transition: all ease-in-out 0.2s;
        }
    </style>
</head>

<body class="bg-light" data-bs-theme="dark">
    <div class="fixed rounded-pill d-flex align-items-center justify-content-evenly mb-4 mx-4 shadow d-none d-lg-block d-lg-flex">
        <a href="https://wa.me/919356562998" target="_blank" class="text-decoration-none d-flex align-items-center justify-content-between">
            <i class="bi bi-whatsapp text-white fs-3"></i>
            <a class="text-decoration-none" href="https://wa.me/919356562998" target="_blank">
                <p class="pt-3 fw-bold text-white">Chat With Us</p>
            </a>
        </a>
    </div>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-sticky top-0 shadow">
        <div class="container-fluid">
            <img src="images/vslogo.png" class="img-fluid ms-3" style="width: 35px;">
            <a id="a1" class="navbar-brand" href="index.php">VISHWA<span id="span1"> KARMA</span></a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Product Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <div class="justify-content-between align-items-center" style="position: relative; top: 8px;">
                    <p class="text-dark text-center rounded-pill p-1 px-3" style="background: #01D3D0;"><i class="bi bi-telephone-fill"></i> +91 8788276872</p>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="container bg-white mt-5">
            <div class="row mt-3">
                <div class="col">
                    <div class="row">
                        <div class="col-75">
                            <div class="container bg-white">
                                <div class="display-order">

                                </div>
                                <form action="connectionbill.php" method="POST">
                                    <div class="row bg-white">
                                        <div class="col-50 text-center m-auto">
                                            <img id="vishwanirmaanhover" src="images/vslogo.png" class="img-fluid"><br><br>
                                            <h2>VISHWANIRMAAN PVT LTD</h2>
                                        </div>
                                        <div class="col-50">
                                            <h3>Billing Address</h3>
                                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                            <input required autofocus type="text" id="fname" name="fnbill" placeholder="First name">
                                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                            <input required type="text" id="email" name="e_mails" placeholder="email@example.com">
                                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                            <input required type="text" id="adr" name="addresses" placeholder="Address">
                                            <label for="city"><i class="fa fa-institution"></i> City</label>
                                            <input required type="text" id="city" name="city" placeholder="Mumbai">
                                            <div class="row">
                                                <div class="col-50">
                                                    <label for="state">State</label>
                                                    <input required type="text" id="state" name="state" placeholder="NY">
                                                </div>
                                                <div class="col-50">
                                                    <label for="zip">Pin Code</label>
                                                    <input required type="text" id="zip" name="pin_code" placeholder="10001">
                                                </div>
                                            </div>
                                            <input type="submit" name="checkout" value="Continue to checkout" class="btn">

                                        </div>
                                        <!-- <div class="col-50">
                                            <h3>Payment</h3>
                                            <label for="fname">Accepted Cards</label>
                                            <div class="icon-container">
                                                <img src="images/visa.png" class="img-fluid visa" alt="">
                                                <img src="images/amex.png" class="img-fluid visa" alt="">
                                                <img src="images/master.png" class="img-fluid visa" alt="">
                                                <img src="images/credit-card.png" class="img-fluid visa" alt="">
                                            </div>
                                            <label for="cname">Name on Card</label>
                                            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                            <label for="ccnum">Credit card number</label>
                                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                            <label for="expmonth">Exp Month</label>
                                            <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                            <div class="row">
                                                <div class="col-50">
                                                    <label for="expyear">Exp Year</label>
                                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                                </div>
                                                <div class="col-50">
                                                    <label for="cvv">CVV</label>
                                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <!-- <label>
                                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                                    </label> -->
                                </form>
                            </div>
                        </div>
                        <!-- <div class="col-25">
                            <div class="container">
                                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                                <p><a href="#">Product 1</a> <span class="price">$15</span></p>
                                <p><a href="#">Product 2</a> <span class="price">$5</span></p>
                                <p><a href="#">Product 3</a> <span class="price">$8</span></p>
                                <p><a href="#">Product 4</a> <span class="price">$2</span></p>
                                <hr>
                                <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
                            </div>
                        </div> -->
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>