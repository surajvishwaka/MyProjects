<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

            .s {
                font-size: 15px;
            }

            #nmb {
                display: none;
            }
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
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

        #span1 {
            color: var(--color-secondary);
            font-weight: 900;
            font-family: Arial, Helvetica, sans-serif;
        }

        .nav-link {
            color: black;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgb(0 0 0);
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: black;
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

        .flot {
            font-size: small;

        }

        .btn {
            transition: all .9s ease;
            background-color: rgb(255, 255, 255);
        }

        .btn:hover {
            border: 1px solid #000000;
        }

        #align {
            font-size: larger;
            font-family: sans-serif;
            font-weight: 800;
        }

        /* underline hovering navbar end */
        nav .container-fluid .container .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        footer div {
            color: var(--color-secondary);
            background-color: var(--color-primary);
            font-size: small;
        }
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

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark position-sticky top-0" style="background-color: var(--color-primary);">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <img src="images/vslogo.png" class="img-fluid ms-3" style="width: 35px;">
                        <a id="a1" class="navbar-brand" href="index.php"><span id="span1">VISHWAKARMA</span></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-center">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="index.php" style="color: var(--color-secondary);"><span><i class="fa-solid fa-house"></i></span>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php" style="color: var(--color-secondary);"><span><i class="fa-solid fa-circle-info"></i></span>About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services.php" style="color: var(--color-secondary);"><span><i class="fa-solid fa-screwdriver-wrench"></i></span>Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="product.php" style="color: var(--color-secondary);"><span><i class="fa-solid fa-cart-shopping"></i></span>Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active-link" href="contact.php" style="color: var(--color-secondary);"><span><i class="fa-solid fa-square-phone"></i></span>Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2" style="display: flex; align-items: center; justify-content: space-evenly;">
                        <div style="position: relative; top: 8px;" id="nmb">
                            <p class="text-white text-center rounded-pill p-1 px-3" style="background: #000000;"><i class="bi bi-telephone-fill"></i> 1234567890</p>

                        </div>
                        <button type="button" id="nav-mode_switch">
                            <i class="fas fa-sun"></i>
                            <i class="fas fa-moon"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contact section -->

    <div class="container-fluid">
        <div class="row pb-3 mt-5 d-flex justify-content-evenly" style="background-color: var(--color-primary);">
            <div class="col-lg-5 mt-3">
                <h1 class="text-center" id="align">Contacts</h1>
                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.9318030472605!2d75.3474907753574!3d19.885101381493314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdba29a85b7c6a5%3A0x2a27c28392ec7ff3!2sCentral%20Naka%20Rd%2C%20Indira%20Nagar%2C%20M%20G%20M%2C%20Aurangabad%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1689517577769!5m2!1sen!2sin" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-5 mt-3">
                <p class="demo">

                </p>
                <h4 class="text-center" style="color: #8f8f8f;">Get In Touch</h4>
                <p style="font-size: small; font-family: inherit;">
                    <b>Address:</b><br>
                    Central Naka Rd
                    Indira Nagar, M G M, Aurangabad, Maharashtra <br>
                    <b>Contact:</b><br>
                    +91 9356562998 <br>
                    +91 8888468357 <br>
                    <b>Email:</b><br>
                    suraj.vishwakarma5708@gmail.com
                </p>
            </div>
        </div>
        <div class="row justify-content-evenly mt-5">
            <div class="col-lg-5 shadow py-3" style="background-color: var(--color-primary); border: 1px solid var(--color-proton);">
                <form action="connection.php" method="post" class="text-dark">
                    <div class="form-floating mb-3">
                        <input autofocus type="text" name="fname" class="form-control shadow-none " id="floatingInput" placeholder="Full Name" required>
                        <label for="floatingInput" class="flot">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control shadow-none " id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput" class="flot">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="phone" class="form-control shadow-none" id="floatingPassword" placeholder="Phone" required>
                        <label for="floatingPassword " class="flot">Phone Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="address" class="form-control shadow-none " id="floatingInput" placeholder="Address" required>
                        <label for="floatingInput " class="flot">Address</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1 flot" class="form-label" style="color: var(--color-secondary);">Message</label>
                        <textarea class="form-control shadow-none " name="message" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                    <div class="justify-content-evenly d-flex">
                        <button onclick="demo()" type=" submit" name="submit" class="btn shadow-none">SUBMIT</button>
                        <button type="reset" class="btn  shadow-none ">RESET</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer section -->

    <footer class="text-center text-lg-start bg-body-tertiary text-muted" style="margin-top: 100px;">


        <section class="">
            <div class="container text-center text-md-start mt-5" style="border-radius: 10px; border: 1px solid var(--color-proton);">

                <div class=" row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <img style="width: 50px;" class="img-fluid" src="images/vslogo.png" alt=""><span id="span1">Vishwakarma</span>
                        </h6>
                        <p>
                            VISHWANIRMAAN PVT LTD this is the 'materail ACP' Providing electronic commerce company
                        </p>
                        <img src="images/qr.png" class="img-fluid" style="width: 30%;">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
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
</body>

</html>