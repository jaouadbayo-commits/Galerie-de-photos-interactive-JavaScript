<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // إذا ما كاينش session، رجعو للصفحة الأولى
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>مرحبا</title>
</head>
<body>
    <h2>مرحبا <?php echo $_SESSION['username']; ?> 👋</h2>
    <a href="logout.php">تسجيل الخروج</a>
</body>
</html>