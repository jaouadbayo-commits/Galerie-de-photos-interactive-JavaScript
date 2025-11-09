<?php
session_start(); 

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: welcome.php"); // تحويل لصفحة الترحيب
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Session</title>
</head>
<body>
    
    <form method="post">
        <input type="text" name="username" required>
        <button type="submit">دخول</button>
    </form>
</body>
</html>
