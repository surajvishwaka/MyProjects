<!doctype html>
<html lang="en">

<head>
    <script>
        window.history.forward();
    </script>
    <title>Login</title>
    <link rel="shortcut icon" href="images/vslogos.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: linear-gradient(to right, #09203f 0%, #537895 100%);
            /* Semi-transparent Red to Yellow */
        }

        .container {
            margin: 142px 107px;
            align-items: center;
            margin: 142px 107px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .row {
            width: 30%;
            text-align: center;
        }

        #user_email {
            text-align: center;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .x {
            background-color: #09203f;
        }

        .x:hover {
            background-color: #537895;
        }

        .h {
            background: rgba(255, 255, 255, 0.2);
            /* Semi-transparent white background */
            border-radius: 16px;
            /* Rounded corners */
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            /* Shadow for depth */
            backdrop-filter: blur(5px);
            /* Apply the blur effect */
            -webkit-backdrop-filter: blur(5px);
            /* For Safari compatibility */
            border: 1px solid rgba(255, 255, 255, 0.3);
            /* Optional border */
            padding: 10px 15px;
        }


        .h::before {
            content: '';
            /* Required for pseudo-elements */
            background-color: rgba(255, 255, 255, 0.3);
            /* Semi-transparent background */
            backdrop-filter: blur(10px) saturate(100%) contrast(45%) brightness(130%);
            /* Customized effect */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="container">
        <div class="row">

            <h1>Login</h1>
            <p class="text-white"><?php echo $_REQUEST['msg']; ?></p>
            <!-- <div class="alert alert-primary" role="alert">
                <?php
                if (isset($_REQUEST['msg']))
                    echo $_REQUEST['msg'];
                ?>
    
            </div> -->
            <div class="mb-3">
                <form action="login1.php" method="post">
                    <label for="exampleFormControlInput1" class="form-label text-white">Enter OTP:</label>
                    <input required maxlength="6" type="number" class="h form-control shadow-none" name="user_otp" id="user_email" placeholder="5 Digit OTP">
            </div>
            <div class="mb-3">
                <button type="submit" class="x btn btn-success">Verify OTP</button>
            </div>
            </form>
        </div>
    </div>

</body>

</html>