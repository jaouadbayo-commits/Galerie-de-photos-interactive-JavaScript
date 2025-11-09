<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD Example</title>
 
</head>
<body>

<h2>Signup Form</h2>
<form action="insert.php" method="POST">
  <input type="text" name="first_name" placeholder="First Name" required>
  <input type="text" name="last_name" placeholder="Last Name" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Signup</button>
</form>

<h2>List of Users</h2>
<table>
  <tr>
    <th>ID</th>
    <th>First name</th>
    <th>Last name</th>
    <th>Email</th>
   
  </tr>
  <?php
    $query = "SELECT * FROM users ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['first_name']}</td>
        <td>{$row['last_name']}</td>
        <td>{$row['email']}</td>
        <td>
          <a class='btn-edit' href='update.php?id={$row['id']}'>Edit</a>
          <a class='btn-delete' href='delete.php?id={$row['id']}'
             onclick='return confirm(\"Delete this user?\")'>Delete</a>
        </td>
      </tr>";
    }
  ?>
</table>

</body>
</html>
