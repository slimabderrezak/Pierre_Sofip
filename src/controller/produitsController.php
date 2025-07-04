<?php
require_once __DIR__ . '/../../config/connexiondb.php'; // Chemin corrigé

function getAllProduits($con) {
    $requete = "SELECT * FROM produits";
    $response = $con->query($requete);
    return $response->fetchAll();
}

// Exemple d'utilisation :
// $con = connectdb();
// $produits = getAllProduits($con);
?>
