<?php
// Connexion à la base de données
include 'config.php';

// Récupération des vélos
$stmt = $pdo->query('SELECT * FROM velos');

echo "<h1>Nos produits</h1>";
while ($velo = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div style='border:1px solid #ccc; margin-bottom:10px; padding:10px;'>";
    echo "<img src='{$velo['image']}' alt='{$velo['nom']}' style='max-width:200px; display:block;'>";
    echo "<h2>{$velo['nom']}</h2>";
    echo "<p>Prix : {$velo['prix']} €</p>";
    echo "<a href='velo.php?id={$velo['id']}'>Plus d'infos</a> | ";
    echo "<a href='commander.php?id={$velo['id']}'>Commander</a>";
    echo "</div>";
}
?>
