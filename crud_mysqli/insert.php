<?php
include("config.php");

$first = $_POST['first_name'];
$last  = $_POST['last_name'];
$email = $_POST['email'];
$pass  = $_POST['password'];


$pass_hashed = md5($pass);

$sql = "INSERT INTO users (first_name, last_name, email, password)
        VALUES ('$first', '$last', '$email', '$pass_hashed')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('User added successfully');window.location='index.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
