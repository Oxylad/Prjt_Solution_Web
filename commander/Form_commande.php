<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="commande.css">
</head>
<body>
    <h2>Commandé un produit</h2>
    <form action="Prog_commande.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="produit">Produit:</label>
        <select name="velo" id="velo">
            <option value="">Selectionner un produit</option>
            <?php
            $db = new PDO('mysql:host=localhost;dbname=smartbike', 'root', '');
            $stmt = $db->query('SELECT * FROM velo');
            while ($row = $stmt->fetch()) {
                echo '<option value="'.$row['id_velo'].'">'.$row['nom'].'</option>';
            }
           ?>
        </select><br><br>

        <label for="message">Message:</label>
        <input type="textarea" id="message" name="message" required><br><br>

        <button type="submit">Validé le Panier</button>
    </form>
</body>
</html>