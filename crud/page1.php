<?php
// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];

// Inclusion de la connexion
include 'conexion.php';

// Requête d’insertion
$requete = "INSERT INTO clients (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";
$query = mysqli_query($conn, $requete);

// Vérification du résultat
if ($query) {
    echo "✅ Insertion réussie dans la table clients.";
} else {
    echo "❌ Erreur d’insertion : " . mysqli_error($conn);
}
?>
