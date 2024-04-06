<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Product-ACP-Online-buying-Selling</title>
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
            top: 66px;
            left: 31px;
            color: #000000;
            font-weight: bold;
            font-size: 26px;
            font-family: sans-serif;
            letter-spacing: -1px;
        }

        .hid {
            display: none;
        }

        #ls {
            letter-spacing: 5px;
            color: #0064b6;
        }

        #span1 {
            color: #000000;
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

        @media screen and (max-width: 576px) {
            #sm {
                padding: 8px;
            }

            .p {

                position: relative;
                top: 36px;
                text-align: center;
                color: #000000;
                font-weight: bold;
                font-size: 26px;
                width: fit-content;
                font-family: sans-serif;
                letter-spacing: -1px;
            }

            .gh {
                display: flex;
                align-items: center;
            }

            #foot {
                font-size: 2.3vw;
                text-align: center;
            }

            .btn {
                width: 100%;
            }


            .sio {
                width: -webkit-fill-available;
            }

            #over {
                overflow-x: scroll;
                height: 270px;
                display: flex;
                flex-direction: row;
                margin: 0;
            }

            .hid {
                display: block;
            }

            #ls {
                letter-spacing: 2px;
                color: #0064b6;
            }
        }

        .btn-group {
            position: absolute;
            top: 69%;

        }

        .hide {
            display: none;
            width: 100%;
            text-align: center;
        }

        .hided:hover .hide {
            display: block;
        }

        .btn-group {
            left: 0%;
        }

        .vcard {
            transition: all ease-in-out 0.3s;
        }

        .vcard:hover {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .addtocart:hover {
            background-color: #0089d3;
            color: white;
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
            background-color: black;
            position: absolute;
            bottom: -16px;
            transition: width 0.3s;
        }

        .navbar-collapse ul li a:hover::after,
        .navbar-collapse ul li a.active-link::after {
            width: 100%;
            color: black;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgb(0, 0, 0);
        }

        .nav-item a span {
            padding-right: 5px;
        }

        .size {

            display: flex;
            justify-content: center;
            text-align: center;
            border-radius: 20px;
            transition: .5s ease;
        }

        .size:hover {

            opacity: 0.9;
            transition: .5s ease;
        }

        .hello {
            padding: 42px;
        }

        .fontchange {
            font-size: medium;
            font-family: fantasy;
        }

        .lp {
            background-color: #ffffff;
        }

        .navbar {
            background-color: #ffffff;
        }

        .addtocart:hover {
            color: #6b6969;
        }

        .addtocart {
            font-size: smaller;
            color: #ffffff;
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
            color: #000000;
            font-weight: 900;
            font-family: Arial, Helvetica, sans-serif;
        }

        .t {
            position: relative;
            font-size: 28px;
            font-weight: 600;
            top: 40px;
            font-family: sans-serif;
            color: #404040;
            letter-spacing: -1px;
        }

        /* underline hovering navbar end */
    </style>
</head>

<body class="lp" data-bs-theme="dark">
    <div class="fixed rounded-pill d-flex align-items-center justify-content-evenly mb-4 mx-4 shadow d-none d-lg-block d-lg-flex">
        <a href="https://wa.me/919356562998" target="_blank" class="text-decoration-none d-flex align-items-center justify-content-between">
            <i class="bi bi-whatsapp text-white fs-3"></i>
            <a class="text-decoration-none" href="https://wa.me/919356562998" target="_blank">
                <p class="pt-3 fw-bold text-white">Chat With Us</p>
            </a>
        </a>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark position-sticky top-0" style="padding: 10px;">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3" style="align-items: center;
                     display: flex; justify-content:center;">
                        <img src="images/vslogo.png" class="img-fluid ms-3" style="width: 35px;">
                        <a id="a1" class="navbar-brand " href="index.php"><span id="span1">VISHWAKARMA</span></a>
                    </div>
                    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse col-lg-3 navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-center">
                            <li class="nav-item">
                                <a class="nav-link text-dark" aria-current="page" href="index.php"><span><i class="fa-solid fa-house"></i></span>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="about.php"><span><i class="fa-solid fa-circle-info"></i></span>About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="services.php"><span><i class="fa-solid fa-screwdriver-wrench"></i></span>Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark active-link" href="product.php"><span><i class="fa-solid fa-cart-shopping"></i></span>Product Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="contact.php"><span><i class="fa-solid fa-square-phone"></i></span>Contact</a>
                            </li>
                        </ul>
                        <div class="col-3" style="justify-content: center; display: flex;">
                            <div class="justify-content-between align-items-center">
                                <!-- <p class="text-dark text-center rounded-pill p-1 px-3" style="background: #01D3D0;"><i class="bi bi-telephone-fill"></i> +91 8788276872</p> -->
                                <?php
                                $count = 0;
                                if (isset($_SESSION['cart'])) {
                                    $count = count($_SESSION['cart']);
                                }
                                ?>
                                <a href="mycart.php">
                                    <button type="button" class="btn position-relative shadow-none text-white m-2" style="background-color: #000000; padding: 4px 8px;">
                                        <i style="color: #ffffff;" class="bi bi-cart-check-fill"></i>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary text-white">
                                            <?php echo $count; ?>
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Product Categories -->
    <div class="container-fluid bg-white ">
        <div class="container border mt-4">

            <!-- row 1 -->
            <h3 class="p">Wooden Series</h3>
            <div class="row mt-5" id="over">
                <div class="col-lg-3 bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood1.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">Burn Walnut</h5>
                                <p class="card-text">Price: Rs.1500</p>
                                <button type="submit" name="Add_To_Cart" style="background-color: #323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood3.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">Palisandro Brown</h5>
                                <p class="card-text">Price: Rs.1200</p>
                                <button type="submit" name="Add_To_Cart" style="background-color: #323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color: #323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr style="color: #b6b6b6;">
            <h3 class="p">Wooden Series</h3>
            <div class="row mt-5" id="over">
                <div class="col-lg-3 bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood1.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">Burn Walnut</h5>
                                <p class="card-text">Price: Rs.1500</p>
                                <button type="submit" name="Add_To_Cart" style="background-color: #323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood3.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">Palisandro Brown</h5>
                                <p class="card-text">Price: Rs.1200</p>
                                <button type="submit" name="Add_To_Cart" style="background-color: #323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color: #323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr style="color: #b6b6b6;">
            <h3 class="p">Wooden Series</h3>
            <div class="row mt-5" id="over">
                <div class="col-lg-3 bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood1.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">Burn Walnut</h5>
                                <p class="card-text">Price: Rs.1500</p>
                                <button type="submit" name="Add_To_Cart" style="background-color: #323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood3.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">Palisandro Brown</h5>
                                <p class="card-text">Price: Rs.1200</p>
                                <button type="submit" name="Add_To_Cart" style="background-color: #323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color: #323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 bg-white bg-white hello" id="sm">
                    <form action="manage_cart.php" method="POST">
                        <div class="gh">
                            <a href="cart1.php"><img src="images/wood5.webp" class=" size card-img-top img-fluid"></a>
                            <div class="card-body text-center sio">
                                <h5 class="card-title text-secondary fontchange">American Walnut</h5>
                                <p class="card-text">Price: Rs.999</p>
                                <button type="submit" name="Add_To_Cart" style="background-color:#323232;" class="btn text-white shadow-none addtocart">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Burn Walnut">
                                <input type="hidden" name="Price" value="1500">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr style="color:#b6b6b6;">
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