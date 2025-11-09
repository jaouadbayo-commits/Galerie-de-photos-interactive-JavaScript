<?php
$servername = "localhost";
$username = "root";
$password = ""; // mot de passe vide par défaut dans XAMPP
$database = "test10"; // ⚠️ Ton vrai nom de base

// Connexion
$conn = mysqli_connect($servername, $username, $password, $database);

// Vérification
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}
?>
