<?php 

session_start();

$nom = $_SESSION['nom'];
$age = $_SESSION['age'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Bienvenue <?= $nom; ?> sur votre compte</h1>
<p>Voici vos informations</p>

<table>
    <tr>
        <th>Nom</th>
        <th>Age</th>
    </tr>
    <tr>
        <td>
            <?= $nom; ?>
        </td>
        <td>
            <?= $age; ?>
        </td>
    </tr>
</table>
</body>
</html>