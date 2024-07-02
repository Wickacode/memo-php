<?php 
$job = $_GET['job'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1><?= $job ?></h1>

<p>Vous êtes sur la page <?= $job; ?></p>

<a href="liens.php">Retour</a>
</body>
</html>