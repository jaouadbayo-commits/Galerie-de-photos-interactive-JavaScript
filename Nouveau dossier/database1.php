<?php

$servername = "localhost";
$username = "root";
$password = "";


///$conn = mysqli_connect($servername, $username, $password);

///echo "Error creating database: " .$conn->error;
////}

$query = "
CREATE TABLE Clients (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  firstname VARCHAR(30) NOT NULL,
 lastname VARCHAR(30) NOT NULL,
 email VARCHAR(50) UNIQUE,
 password VARCHAR(80),
 reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 )
";
if (mysqli_query($conn, $query)) {
 echo "Table Clients created successfully";
} else {
 echo "Error creating table: " . mysqli_error($conn);


?>
