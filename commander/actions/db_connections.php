<?php

$dsn = 'mysql:host=localhost;dbname=innogears;charset=utf8';
$username = 'root'; // Changez avec votre nom d'utilisateur MySQL
$password = ''; // Changez avec votre mot de passe MySQL

try {
    $bdd = new PDO($dsn, $username, $password);
}catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}