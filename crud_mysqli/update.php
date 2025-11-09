<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $res = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
    $data = mysqli_fetch_assoc($res);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $first = $_POST['first_name'];
    $last  = $_POST['last_name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET first_name='$first', last_name='$last', email='$email' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('User updated');window.location='index.php';</script>";
    } else {
        echo "Error updating: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Update User</title>
</head>
<body>

<h2>Update User</h2>
<form method="POST">
  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
  <input type="text" name="first_name" value="<?php echo $data['first_name']; ?>" required>
  <input type="text" name="last_name" value="<?php echo $data['last_name']; ?>" required>
  <input type="email" name="email" value="<?php echo $data['email']; ?>" required>
  <button type="submit" name="update">Update</button>
  <a href="index.php">Cancel</a>
</form>

</body>
</html>
