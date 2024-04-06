<!-- MySQL database connection -->
<?php
    $conn = mysqli_connect("127.0.0.1:3308","root","","dbsearch");
// $host = "127.0.0.1:3308";
// $username = "root";
// $pass = "";
// $db_name = "dbsearch";
// $conn = mysqli_connect($host, $username, $pass, $db_name);

// if (!$conn) {
//     echo "Connection failed" . mysqli_connect_error();
// }
// echo "Connection Successfully";
// Database creating
// $sql = "CREATE Database information";
// $sql = "CREATE TABLE student_details(id INT AUTO_INCREMENT,
//                                 fname VARCHAR(20) NOT NULL,
//                                 email VARCHAR(30) NOT NULL,
//                                 phone VARCHAR(10) NOT NULL,
//                                 address VARCHAR(255) NOT NULL,
//                                 message VARCHAR(100) NOT NULL,
//                                 primary key(id))";
// $query = "INSERT INTO datasearch(materialname) 
// VALUES('Burn Walnut'),
// ('Ebony'),
// ('Palisandro Brown'),
// ('California Walnut'),
// ('American Walnut'),
// ('Slate Stone Black'),
// ('Glistening Snow'),
// ('Terracotta Orange Brown'),
// ('Beige Grey'),
// ('Dark Oxide'),
// ('Lake Blue'),
// ('Red'),
// ('Yellow'),
// ('Tomato Red'),
// ('Traffic Yellow'),
// ('Spotted Concrete'),
// ('Carbon Zoom'),
// ('Titanium Brush'),
// ('Gold Brush'),
// ('Elox Umber Brush')
// ";

// if (mysqli_query($conn, $query)) {
//     echo "insert succesfully";
// } else {
//     echo "insert failed" . mysqli_error($conn);
// }
// mysqli_close($conn);
// this code for returning own page when submitted
// header("location:index2.php");

?>