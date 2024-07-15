<?php 

session_start();

$nom = $_SESSION['nom'];
$age = $_SESSION['age'];

//Création du cookie
setcookie("username", $nom,time()+3600, "/","", false, true);

//Récupération du cookie pour le mémoriser (par exemple, pour que l'utilisateur ait son nom affiché quand il se reconnectera)
$nom = isset($_COOKIE['username'])?$_COOKIE['username']:$nom;

if(isset($_GET['logout'])) {
    setcookie("username", "", time()-3600,"/", "", false, true); // Suppression du cookie (donc la récup en ligne 12 n'est plus activée)
    session_destroy();
    header('Location: delete.php');
    exit();
}
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
<a href="?logout=true">Détruire la session</a>
</body>
</html>