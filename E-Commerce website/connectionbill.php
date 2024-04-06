<?php
if (isset($_POST['checkout'])) {

    $conn = mysqli_connect("127.0.0.1:3308", "root", "", "dbbilling");
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
    // $sql = "INSERT INTO bill_checkout(fnbill,e_mails,addresses,city,state,pin_code) VALUES('$_POST[fnbill]','$_POST[e_mails]','$_POST[addresses]','$_POST[city]','$_POST[state]','$_POST[pin_code]')";
    $sql = "INSERT INTO `bill_checkout`(`fnbill`, `e_mails`, `addresses`, `city`, `state`, `pin_code`) VALUES ('$_POST[fnbill]','$_POST[e_mails]','$_POST[addresses]','$_POST[city]','$_POST[state]','$_POST[pin_code]')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Insert succesfully";
    } else {
        echo "Insert failed" . mysqli_error($conn);
    }
   
    mysqli_close($conn);
    // this code for returning own page when submitted
    header("location:payscript.php");
}
?>