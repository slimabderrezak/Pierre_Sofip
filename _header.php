<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Header Stagiaire</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .header {
      display: flex;
      align-items: center;
      background-color: #f1f1f1;
      padding: 10px 20px;
      border-bottom: 2px solid #ccc;
    }

    .logo {
      height: 60px;
      margin-right: 20px;
    }

    .stagiaire-info {
      display: flex;
      flex-direction: column;
    }

    .stagiaire-info h1 {
      margin: 0;
      font-size: 20px;
      color: #333;
    }

    .stagiaire-info p {
      margin: 2px 0;
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>

  <div class="header">
    <!-- Logo -->
    <img src="logo.png" alt="Logo entreprise" class="logo">

    <!-- Informations du stagiaire -->
    <div class="stagiaire-info">
      <h1>Nom du Stagiaire</h1>
      <p>Poste : Stagiaire Développement Web</p>
      <p>Entreprise : Nom de l'entreprise</p>
      <p>Période : Juin - Août 2025</p>
    </div>
  </div>

</body>
</html>
