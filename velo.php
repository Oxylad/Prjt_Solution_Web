<?php
// Connexion à la base de données
include 'config.php';

// Vérification de l'ID dans l'URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Récupération des détails du vélo
    $stmt = $pdo->prepare('SELECT * FROM velos WHERE id = :id');
    $stmt->execute(['id' => $id]);
    $velo = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($velo) {
        echo "<h1>{$velo['nom']}</h1>";
        echo "<img src='{$velo['image']}' alt='{$velo['nom']}' style='max-width:300px; display:block;'>";
        echo "<p>{$velo['description']}</p>";
        echo "<p>Prix : {$velo['prix']} €</p>";
        echo "<a href='commander.php?id={$velo['id']}'>Commander</a>";
    } else {
        echo "<p>Produit introuvable.</p>";
    }
} else {
    echo "<p>Aucun produit sélectionné.</p>";
}
?>