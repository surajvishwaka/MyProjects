<?php
session_start();
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

            #logoutm {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .btn-outline-dangers {
                padding: 0px;
                font-size: 0.7rem;
            }

            thead {
                font-size: 0.8rem;
            }

            tbody {
                font-size: 0.7rem;
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
            width: 230px;
        }

        .user:hover {
            background-color: black;
        }

        .user a {
            color: #fbfdff;
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

        .btn-outline-dangers {
            transition: all ease .4s;
        }

        .btn-outline-dangers:hover {
            background-color: red;
            color: white;
        }

        #grocery {
            width: 40px;
            margin-top: -13px;
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

        .nav-link {
            color: #000000;
        }

        #cartcntt {
            align-items: center;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-white navbar-expand-lg  position-sticky top-0">
        <div class="container-fluid">
            <div class="container d-flex justify-content-center">
                <div class="row" style="width: 100%;">
                    <div class="col-lg-3" style="align-items: center;
                     display: flex; justify-content:center;">
                        <img src="images/vslogo.png" class="img-fluid ms-3" style="width: 35px;">
                        <a id="a1" class="navbar-brand" href="index.php"><span id="span1">VISHWAKARMA</span></a>
                    </div>
                    <div class="col-lg-6" style="display: flex;align-items: center;justify-content: center;">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class=" navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-center">
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
                                    <a class="nav-link" href="product.php">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                            <!-- <div class="justify-content-between align-items-center">
            
                                <button class="rounded" id="signupp" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                                <button class="rounded bg-danger" id="signupp" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Register</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3" id="logoutm">
                        <div class="d-flex" id="cartcntt">

                            <?php
                            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                                echo "
                                    <div class='user align-items-center'>
                                        $_SESSION[username]  <a href='logout.php'>LOGOUT</a>
                                    </div>
                                ";
                            }
                            ?>
                            <a href="mycart.php" id="inboxbadge">
                                <button type="button" class="btn position-relative shadow-none text-white m-2" style="background-color: #000000; padding: 4px 8px;">
                                    <i class="bi bi-cart-check-fill text-white"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                        0
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </button>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 rounded text-center border bg-light my-5">
                <h1> <img src="images/grocery-store.png" class="img-fluid" id="grocery"> STORE</h1>
            </div>
            <div class="col-lg-9">
                <table class="table table-hover">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;
                                echo "
                                    <tr>
                                        <td>$sr</td>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                        <td>
                                            <form action='manage_cart.php' method='POST'>
                                                <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                            </form>
                                        </td>
                                        <td class='itotal'></td>
                                        <td>
                                            <form action='manage_cart.php' method='POST'>
                                                <button name='Remove_Item' class='btn btn-outline-dangers shadow-none btn-sm'><i class='bi bi-trash3-fill'></i> REMOVE</button>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                            </form>
                                        </td>
                                    </tr>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Grand Total:</h4>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    ?>
                        <form action="purchase.php" method="POST">
                            <div class="form-group">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="Full_Name" class="form-control shadow-none" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="number" name="Phone_No" class="form-control shadow-none" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" name="Address" class="form-control shadow-none" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input shadow-none" type="radio" name="Pay_Mode" value="COD" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Cash On Delivery
                                </label>
                            </div>
                            <br>
                            <button href="payscript.php" class="btn btn-primary btn-block shadow-none" name="purchase">Make Purchase</button>
                        </form>
                    <?php
                    }
                    ?>
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

    <!-- mobile device navbar  -->

    <div class="container-fluid d-sm-none" style="
    position: sticky;
    bottom:0; background-color:white; 
    box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 87px -10px;
    ">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <ul class=" d-flex text-center" style="list-style: none; margin:0; position:relative; right:35px; width:400px;">
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

    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal() {
            gt = 0;
            for (let i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;
        }

        subTotal();
    </script>

</body>

</html>