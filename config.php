<?php
// Paramètres de connexion à la base de données
$host = 'localhost'; // Hôte de la base de données (souvent 'localhost')
$dbname = 'velo'; // Remplacez par le nom de votre base de données
$user = 'root'; // Nom d'utilisateur (souvent 'root' en local)
$pass = ''; // Mot de passe (vide par défaut en local avec XAMPP ou WAMP)

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gérer les erreurs
} catch (PDOException $e) {
    // En cas d'erreur, afficher un message et arrêter le script
    die("Erreur de connexion : " . $e->getMessage());
}
?>