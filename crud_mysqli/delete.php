<?php
include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('User deleted successfully');window.location='index.php';</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
