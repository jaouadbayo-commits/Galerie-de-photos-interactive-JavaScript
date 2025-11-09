<?php
include 'conexion.php'; // Connexion à la base test10

// Requête pour récupérer tous les clients
$requete = "SELECT * FROM clients";
$resultat = mysqli_query($conn, $requete);

if (!$resultat) {
    die("Erreur lors de la récupération : " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des clients</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      padding: 20px;
    }
    table {
      border-collapse: collapse;
      width: 60%;
      margin: auto;
      background: white;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }
    th {
      background-color: #4CAF50;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    h2 {
      text-align: center;
      color: #333;
    }
  </style>
</head>
<body>
  <h2>Liste des clients enregistrés</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Email</th>
    </tr>

    <?php
    // Parcours des résultats et affichage dans le tableau
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['prenom'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }

    // Si aucun client
    if (mysqli_num_rows($resultat) == 0) {
        echo "<tr><td colspan='4'>Aucun client trouvé.</td></tr>";
    }
    ?>
  </table>
</body>
</html>

</html>