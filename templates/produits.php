<?php
require_once __DIR__ . '/../config/connexiondb.php';
require_once __DIR__ . '/../src/controllers/stagiairesController.php';
require_once __DIR__ . '/partials/_head.php';
require_once __DIR__ . '/partials/_header.php';

$con = connectdb();
$requete = "SELECT * FROM Produit"; // Remplace par le nom correct de ta table produits
$response = $con->query($requete);
$lignes = $response->fetchAll();
?>

<div class="container mt-4">
  <h1 class="text-center">Produits</h1>
  <table class="table border table-striped">
    <thead>
      <tr>
        <th class="border text-center">N° de produit</th>
        <th class="border text-center">Nom du produit</th>
        <th class="border text-center">Image</th>
        <th class="border text-center">Prix</th>
        <th class="border text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($lignes as $ligne): ?>
        <tr>
          <td class="border align-middle text-center"><?= htmlspecialchars($ligne['id']) ?></td>
          <td class="border align-middle text-center"><?= htmlspecialchars($ligne['nom']) ?></td>
          <td class="border align-middle text-center">
            <img class="img-fluid" src="../public/images/<?= htmlspecialchars(basename($ligne['image'])) ?>" alt="<?= htmlspecialchars($ligne['nom']) ?>" style="max-width:80px;">
          </td>
          <td class="border align-middle text-center"><?= htmlspecialchars($ligne['prix']) ?> €</td>
          <td class="border align-middle text-center">
            <!-- Actions à ajouter ici (modifier, supprimer, etc.) -->
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="my-4">
    <a href="addProduits.php"><button class="btn btn-outline-primary mx-1">Ajouter</button></a>
  </div>
</div>

<?php require_once __DIR__ . '/partials/_script.php'; ?>
