<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

mysqli_select_db($conn,'testdb1');
$password = password_hash("amine123456", PASSWORD_DEFAULT);
$sql = "INSERT INTO Clients (firstname, lastname, email,password)
VALUES ('Amine', 'Ze', 'Amineze@gmail.com','$password')";if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
