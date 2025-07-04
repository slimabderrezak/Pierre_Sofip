<?php
// Exemple de contrôleur pour les stagiaires

// Inclure la connexion si besoin
// require_once __DIR__ . '/../../config/connexiondb.php';

// Fonction pour récupérer tous les stagiaires
function getAllStagiaires($con) {
    $sql = "SELECT * FROM stagiaires";
    $stmt = $con->query($sql);
    return $stmt->fetchAll();
}

// Fonction pour ajouter un stagiaire
function addStagiaire($con, $nom, $prenom, $email) {
    $sql = "INSERT INTO stagiaires (nom, prenom, email) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    return $stmt->execute([$nom, $prenom, $email]);
}
?>

// Ajoute d'autres fonctions selon tes besoins (modifier, supprimer,