<?php
session_start();

$conn = mysqli_connect("127.0.0.1:3308", "root", "", "cart_manage");

if (mysqli_connect_error()) {
    echo "
        <script>
            alert('cannot connect database');
            window.location.href='mycart.php';
        </script>
    ";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['purchase'])) {
        $query1 = "INSERT INTO `order_managers`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[Full_Name]','$_POST[Phone_No]','$_POST[Address]','$_POST[Pay_Mode]')";

        if (mysqli_query($conn, $query1)) {
            $Order_Id = mysqli_insert_id($conn);
            $query2 = "INSERT INTO `user_order`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($conn, $query2);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "isii", $Order_Id, $Item_Name, $Price, $Quantity);
                foreach ($_SESSION['cart'] as $key => $values) {
                    $Item_Name = $values['Item_Name'];
                    $Price = $values['Price'];
                    $Quantity = $values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo "
                    <script>
                        alert('Checking Out');
                        window.location.href='payscript.php';
                       
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('SQL Query Prepare Error');
                        window.location.href='mycart.php';
                    </script>
                ";
            }
        } else {
            echo "
                    <script>
                        alert('SQL Error');
                        window.location.href='mycart.php';
                    </script>
                ";
        }
    }
}
