<?php

// Récupération des données du formulaire
$id = $_POST['id'];
$mdp = $_POST['mdp'];

// Connexion à la base de données MySQL via un conteneur Docker
$host = "mysql"; // Le host est le nom du service, présent dans le docker-compose.yml
$dbname = "member";
$charset = "utf8";
$port = "3306";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;port=$port", "root", "200501");

    // Insertion des données dans la table
    $query = "INSERT INTO projet (id, mdp) VALUES ('$id', '$mdp')";
    $pdo->exec($query);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo "Error : " . $e->getMessage();
    error_log($e->getMessage());
}






?>