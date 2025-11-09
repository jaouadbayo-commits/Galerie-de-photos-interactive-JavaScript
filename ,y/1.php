
$sql = "CREATE DATABASE testDb";
if (mysqli_query($conn, $sql)) {
 echo "Database created successfully";
} else {
 echo "Error creating database: " . mysqli_error($conn);
}

