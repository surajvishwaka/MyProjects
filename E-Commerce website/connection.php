<!-- MySQL database connection -->
<?php
if (isset($_POST['submit'])) {
    $host = "127.0.0.1:3308";
    $username = "root";
    $pass = "";
    $db_name = "information";
    $conn = mysqli_connect($host, $username, $pass, $db_name);

    if (!$conn) {
        echo "Connection failed" . mysqli_connect_error();
    }
    echo "Connection Successfully";
    // Database creating
    // $sql = "CREATE Database information";
    // $sql = "CREATE TABLE student_details(id INT AUTO_INCREMENT,
    //                                 fname VARCHAR(20) NOT NULL,
    //                                 email VARCHAR(30) NOT NULL,
    //                                 phone VARCHAR(10) NOT NULL,
    //                                 address VARCHAR(255) NOT NULL,
    //                                 message VARCHAR(100) NOT NULL,
    //                                 primary key(id))";
    $sql = "INSERT INTO contact_details(fname,email,phone,address,message) VALUES('$_POST[fname]','$_POST[email]','$_POST[phone]','$_POST[address]','$_POST[message]')";

    if (mysqli_query($conn, $sql)) {
        echo "
                        <script>
                            alert('Message send successfully!');
                            window.location.href='contact.php';
                        </script>
                    ";

      
    } else {
        echo "DB_Table created failed" . mysqli_error($conn);
    }


    // this code for returning own page when submitted
    // header("location:contact.php");
    mysqli_close($conn);
}
?>
