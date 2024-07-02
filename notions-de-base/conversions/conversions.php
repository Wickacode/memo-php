<!-- Il est souvent nécéssaire de convertir des valeurs d'un type à un autre.
Les conversions de type permettent de s'assurer que les données sont utilisées dans le format approprié
pour une opération donnée.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$a = "10"; //Ceci est une chaîne de caractère
$b = (int)$a; //Converti $a en valeur numérique

$c = "3.14";
$d = (float) $c; //Converti $c en nombre décimal
$e = (int) $c; //Converti $c en nombre entier

$f = 42;
$g = strval($f); //Converti une valeur numérique en chaîne de caractère
$h = (string)$f; //Autre façon de convertir en chaîne de caractère

?>

<?= "<p>$a</p>" ?> <!--Renvoi une chaîne de caractère-->
<?= "<p>$b</p>" ?><!--Renvoi une valeur numérique-->
<?= "<p>$d</p>" ?> <!--Renvoi un nb décimal-->
<?= "<p>$e</p>" ?> <!--Renvoi un nb entier-->
<?= "<p>$f</p>" ?> <!--Renvoi un nb entier-->
<?= "<p>$g</p>" ?> <!--Renvoi une chaîne de caractère-->
</body>
</html>