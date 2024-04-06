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

            .center23 {
                display: flex;
            }
        }

        .img-magnifier-container {
            position: relative;
        }

        .img-magnifier-glass {
            position: absolute;
            border: 2px solid #000;
            border-radius: 50%;
            cursor: none;
            /*Set the size of the magnifier glass:*/
            width: 100px;
            height: 100px;
        }

        .adbtn {
            width: 200px;
        }

        .adbtn:hover {
            background-color: orange;
        }

        .star7 {
            width: 40px;
            height: 20px;
            font-size: 15px;
        }

        .star7 .bi-star-fill {
            font-size: 13px;
        }

        .px10 {
            padding: 10px;
            font-weight: bold;
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
                    <p class="text-dark text-center rounded-pill p-1 px-3" style="background: #01D3D0;"><i class="bi bi-telephone-fill"></i> 1234567890</p>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="container bg-white">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <center>
                        <div class="img-magnifier-container">
                            <img id="myimage" class="img-fluid" src="images/wood1.webp" width="420" height="480">
                        </div>
                        <div class="purchasebtn row">
                            <div class="col-lg-12 center23">
                                <button type="button" class="btn btn-warning text-white mt-2 m-1 shadow-none adbtn"><i class="bi bi-cart-plus-fill m-2"></i>ADD TO CART</button>
                                <a href="payscript.php"><button type="button" class="btn btn-warning text-white mt-2 m-1 shadow-none adbtn"><i class="bi bi-bag-heart-fill m-2"></i>BUY NOW</button></a>
                            </div>
                        </div>
                        <!-- <form action="manage_cart.php" method="POST">
                            <div class="card">
                                <a href="cart1.php"><img src="images/wood1.webp" class="card-img-top img-fluid"></a>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Burn Walnut</h5>
                                    <p class="card-text">Price: Rs.1500</p>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info text-white shadow-none addtocart">Add To Cart</button>
                                    <input type="hidden" name="Item_Name" value="Burn Walnut">
                                    <a href="buy1.php"><button type="button" class="btn btn-info text-white m-1 shadow-none adbtn"><i class="bi bi-bag-heart-fill m-2"></i>BUY NOW</button></a>
                                    <input type="hidden" name="Price" value="1500">
                                </div>
                            </div>
                        </form> -->
                    </center>
                </div>
                <!-- <marquee class="bg-dark px10 text-light mt-2" behavior="smooth" direction="down" scrollamount="1.5">New Manufacture natural wood <sup>25%</sup> sheet | lightshine wood sheet</marquee> -->
                <div class="col-lg-5 mb-3">
                    <h6 class="mt-5 fs-5">
                        <h3>woodcraft Wood MDF Board Sheets, 2mm Thickness, Size 12X24 inch - Pack of 6 Pine Wood Veneer (60 cm x 30 cm)</h3>
                    </h6>
                    <button type="button" class="btn-success star7">4.2<i class="bi bi-star-fill"></i></button>
                    <p class="text-success fw-bold">Extra ₹29 off</p>
                    <div class="rupe d-flex ">
                        <h3 class="fw-bold">₹371</h3>
                        <form action="payscript.php"></form>
                        <!-- <input type="number" id="amount" name="amount"> -->
                        <del class="mt-2 m-2">₹699</del><span class="text-success mt-2 m-2">46% off</span>
                    </div>
                    <hr>
                    <h4 class="fs-3">Specifications</h4>
                    <p class="fs-4">General</p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Brand</td>
                                <td>woodcraft</td>
                            </tr>
                            <tr>
                                <td>Modal Number</td>
                                <td>Wood MDF Board Sheets, 2mm Thickness, Size 12X24</td>
                            </tr>
                            <tr>
                                <td>Veneer Type</td>
                                <td>Pine wood</td>
                            </tr>
                            <tr>
                                <td>Net Quentity</td>
                                <td>6 wood</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="fs-4">Dimensions</p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Length</td>
                                <td>60cm</td>
                            </tr>
                            <tr>
                                <td>Width</td>
                                <td>30cm</td>
                            </tr>
                            <tr>
                                <td>Thickness</td>
                                <td>0.2cm</td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <td>1999g</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="fs-4">Description</p>
                    <p>MDF Board Is an excellent substrate for veneers.Isotropic (its properties are the same in all directions as a result of no grain), so no tendency to split.Consistent in strength and size.Shapes well.Stable dimensions (won't expand or contract like wood). Easy to finish (i.e., paint),These are not waterproof. Not durable with water.</p>
                    <p class="fs-4">Ratings & Reviews</p>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-label="Warning example" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div><br>
                    <textarea style="resize: none;" class="form-control shadow-none" id="exampleFormControlTextarea1" rows="3" placeholder="Add your comments..."></textarea>
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
    <script>
        function magnify(imgID, zoom) {
            var img, glass, w, h, bw;
            img = document.getElementById(imgID);
            /*create magnifier glass:*/
            glass = document.createElement("DIV");
            glass.setAttribute("class", "img-magnifier-glass");
            /*insert magnifier glass:*/
            img.parentElement.insertBefore(glass, img);
            /*set background properties for the magnifier glass:*/
            glass.style.backgroundImage = "url('" + img.src + "')";
            glass.style.backgroundRepeat = "no-repeat";
            glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
            bw = 3;
            w = glass.offsetWidth / 2;
            h = glass.offsetHeight / 2;
            /*execute a function when someone moves the magnifier glass over the image:*/
            glass.addEventListener("mousemove", moveMagnifier);
            img.addEventListener("mousemove", moveMagnifier);
            /*and also for touch screens:*/
            glass.addEventListener("touchmove", moveMagnifier);
            img.addEventListener("touchmove", moveMagnifier);

            function moveMagnifier(e) {
                var pos, x, y;
                /*prevent any other actions that may occur when moving over the image*/
                e.preventDefault();
                /*get the cursor's x and y positions:*/
                pos = getCursorPos(e);
                x = pos.x;
                y = pos.y;
                /*prevent the magnifier glass from being positioned outside the image:*/
                if (x > img.width - (w / zoom)) {
                    x = img.width - (w / zoom);
                }
                if (x < w / zoom) {
                    x = w / zoom;
                }
                if (y > img.height - (h / zoom)) {
                    y = img.height - (h / zoom);
                }
                if (y < h / zoom) {
                    y = h / zoom;
                }
                /*set the position of the magnifier glass:*/
                glass.style.left = (x - w) + "px";
                glass.style.top = (y - h) + "px";
                /*display what the magnifier glass "sees":*/
                glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
            }

            function getCursorPos(e) {
                var a, x = 0,
                    y = 0;
                e = e || window.event;
                /*get the x and y positions of the image:*/
                a = img.getBoundingClientRect();
                /*calculate the cursor's x and y coordinates, relative to the image:*/
                x = e.pageX - a.left;
                y = e.pageY - a.top;
                /*consider any page scrolling:*/
                x = x - window.pageXOffset;
                y = y - window.pageYOffset;
                return {
                    x: x,
                    y: y
                };
            }
        }
        magnify("myimage", 3);
    </script>
</body>

</html>