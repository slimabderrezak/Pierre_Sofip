<?php
// On inclut le fichier de connexion à la base de données
require_once __DIR__ . '/../../config/connexiondb.php';
$con = connectdb();

if (
    isset($_POST["nomProd"], $_FILES["image"], $_POST["prix"]) &&
    !empty($_POST["nomProd"]) &&
    !empty($_POST["prix"]) &&
    isset($_FILES["image"]["tmp_name"]) &&
    $_FILES["image"]["error"] === UPLOAD_ERR_OK
) {
    $dossierCible = __DIR__ . '/../../public/images/';
    if (!is_dir($dossierCible)) {
        mkdir($dossierCible, 0777, true);
    }
    $nomImage = uniqid('img_') . '_' . basename($_FILES['image']['name']);
    $fichierCible = $dossierCible . $nomImage;

    // Vérification du type de fichier (optionnel)
    $ext = strtolower(pathinfo($nomImage, PATHINFO_EXTENSION));
    $typesAutorises = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    if (in_array($ext, $typesAutorises)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $fichierCible)) {
            $nomProd = htmlspecialchars(strip_tags($_POST["nomProd"]));
            $prix = floatval($_POST["prix"]);
            $cheminImage = $nomImage; // On stocke juste le nom du fichier

            $req = $con->prepare("INSERT INTO produits (nom, image, prix) VALUES (?, ?, ?)");
            $req->execute([$nomProd, $cheminImage, $prix]);
        }
    }
    header("Location: ../../templates/produits.php");
    exit;
}
?>