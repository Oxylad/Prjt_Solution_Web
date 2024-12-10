<?php

require "../actions/db_connections.php";

if ($_REQUEST['action'] =="POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $lnom = $_POST['lnom'];
    
    try {
        $stmt = $bdd->prepare('INSERT INTO contact (nom, prenom, email,phone) VALUES (:nom, :prenom, :email, :phone)');
        $stmt->bindParam(':nom', $name);
        $stmt->bindParam(':lnom', $lnom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
        
        echo '<p>Contact enregistrer avec succès, vous serez bientot recontacté</p>';
    }catch (Exception $e)
    {
        die('Erreur : '. $e->getMessage());
    }
}
?>

