<!-- Les valeurs de type numériques en PHP sont utilisés pour stocker des valeurs de type numérique.
Il existe plusieurs types numériques en PHP qui diffèrent en terme de plage de valeurs possibles 
et de précision. Les types numériques les plus courants utilisés en PHP sont INT qui représente un 
nombre entier signé qui peut être positif, négatif, ou zéro. La plage de valeurs possibles pour INT dépend 
de la plateforme sur laquelle PHP est exécutée. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$age = 25;
$temperature = 36.5; //float
$solde = 1500.50; //chiffres décimaux

?>

<?= "<p>$age</p>"?>
<?= "<p>$temperature</p>"?>
<?= "<p>$solde</p>"?>

</body>
</html>