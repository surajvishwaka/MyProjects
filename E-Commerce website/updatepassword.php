<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Update</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: sans-serif;
        }

        form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            width: 350px;
            border-radius: 5px;
            padding: 20px 25px 30px 25px;
        }

        form h3 {
            margin-bottom: 30px;
            color: #30475e;
        }

        form input {
            width: 100%;
            margin-bottom: 28px;
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #03ecf0;
            border-radius: 0;
            padding: 5px 0;
            font-weight: 550;
            font-size: 14px;
            outline: none;
        }

        form button {
            font-weight: 550;
            font-style: 15px;
            color: white;
            background-color: #2793ff;
            padding: 10px 10px;
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 5px;
        }

        form button:hover {
            background-color: #243547;
            color: white;
        }

        #cntd{
            width: 100%;
            text-align: center;
            margin-top: 100px;
        }
        #v{
            width: 100px;
        }
        #cntd h1{
            color: darkgray;
            padding-top: 10px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    </style>
</head>

<body style="background-color: #f0f5ff;">

    <div id="cntd">
        <img id="v" class="img-fluid" src="images/vslogo.png" alt=""><br>
        <h1>VISHWANIRMAAN pvt ltd</h1>
    </div>

    <?php
    require("connection1.php");

    if (isset($_GET['email']) && isset($_GET['reset_token'])) {
        date_default_timezone_set('Asia/kolkata');
        $date = date("Y-m-d");
        $query = "SELECT * FROM `registered_users` WHERE `email`='$_GET[email]' AND `resettoken`='$_GET[reset_token]' AND `resettokenexpire`='$date'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                echo "
                        <form method='POST'>
                            <h3>Create New Password</h3>
                            <input type='password' placeholder='New Password' name='Password' required>
                            <button type='submit' name='updatepassword'>UPDATE</button>
                            <input type='hidden' name='email' value='$_GET[email]'>
                        </form>
                    ";
            } else {
                echo "
                        <script>
                            alert('Invalid or Expire Link');
                            window.location.href='index.php';
                        </script>
                    ";
            }
        } else {
            echo "
                        <script>
                            alert('Server Down! Try Again Later');
                            window.location.href='index.php';
                        </script>
                    ";
        }
    }
    ?>

    <?php
    if (isset($_POST['updatepassword'])) {
        $pass = password_hash($_POST['Password'], PASSWORD_BCRYPT);
        $update = "UPDATE `registered_users` SET `password`='$pass',`resettoken`=NULL,`resettokenexpire`=NULL WHERE `email`='$_POST[email]'";

        if (mysqli_query($conn, $update)) {
            echo "
                        <script>
                            alert('Password Updated Successfully');
                            window.location.href='index.php';
                        </script>
                    ";
        } else {
            echo "
                        <script>
                            alert('Server Down! Try Again Later');
                            window.location.href='index.php';
                        </script>
                    ";
        }
    }
    ?>
</body>

</html>