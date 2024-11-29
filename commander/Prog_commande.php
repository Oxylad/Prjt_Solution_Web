<?php

require_once ("actions/db_connections.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $velo = $_POST['velo'];

    try {
        $stmt = $bdd->prepare('INSERT INTO commande (nom, prenom, email,velo) VALUES (:nom, :prenom, :email, :velo)');
        $stmt->bindParam(':nom', $name);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':velo', $velo);
        $stmt->execute();
        
        echo '<p>Commande enregistré avec succès.</p>';
    }catch (Exception $e)
    {
        die('Erreur : '. $e->getMessage());
    }

}   