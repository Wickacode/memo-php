<!-- Créer une page "compte.php" qui affiche le nom et le prénom de l'utilisateur à partir des données stockeées dans
une session. Si les données ne sont pas disponibles dans la session, la page doit afficher un 
message d'erreur et rediriger l'utilisateur vers la page de saisie.
-->

<?php

session_start();

$nom = $_SESSION['nom'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Hello <?= $nom; ?></h1>
<a href="index.php">Retour</a>
    
</body>
</html>