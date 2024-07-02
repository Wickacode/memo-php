<!--En PHP, les opération arithmétiques sont utilisées pour effectuer des calculs mathématiques 
sur des valeurs numériques -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$a = 10;
$b = 5;

//addition
$c = $a + $b;
//soustraction
$d = $a - $b;
//multiplication
$e = $a * $b;
//division; 
$f = $a / $b;
//modulo (Le reste d'une division)
$g = $a % $b;
//puissance 
$h = $a ** $b;


?>

<?= "<p>$c</p>" ?>
<?= "<p>$d</p>" ?>
<?= "<p>$e</p>" ?>
<?= "<p>$f</p>" ?>
<?= "<p>$g</p>" ?>
<?= "<p>$h</p>" ?>
</body>
</html>