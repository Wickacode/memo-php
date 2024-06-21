<!-- is_numeric est une fonction prédéfinie qui permet de vérifier si une variable est numérique ou non.
Elle retourne TRUE si la variable passée en paramètre est une valeur numérique, entier, décimal, notaiton scientifique, etc.
Ou une chaîne de caractère numérique. Et FALSE dans les autres cas. -->

<?php 

$nombre = 100;
$nombre2 = "10";
$chaine = "dix";

if(is_numeric($nombre)){
    echo "C'est une valeur numerique";
}else {
    echo "Ce n'est pas une valeur numérique";
}
?>