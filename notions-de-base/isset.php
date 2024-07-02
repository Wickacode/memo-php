<!-- La fonction isset permet de vérifier si une variable est définie ou si elle est nulle.
Si la fonction retourne true, c'est que la variable est définie.
Si elle est nulle, c'est la variable false qui sera retournée 
La syntaxe est la suivante : 
isset(variable)
-->

<?php 
$nom = "Jonathan";

$a = 5;
$b = 2;

if(isset($nom)) {
    echo "Bonjour $nom";
}

if(isset($a) || isset($b)) {
    $somme = $a + $b;
    echo "La somme de $a et de $b est égal à $somme";
}
?>