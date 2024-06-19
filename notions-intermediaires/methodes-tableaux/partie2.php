<?php 

$numbers = array(1,2,3,4,5,6,7,8,9,10);

//array_key_exists permet de vérifier si une clé existe dans un tableau 
if(array_key_exists(4, $numbers)) {
    echo "La clé 4 existe dans le tableau";
} else {
    echo "La clé 4 n'existe pas dans le tableau";
    //Ici la clé 4 correspond à 5, car c'est l'index 4 et non la valeur.
}

//array_reverse qui renverse l'ordre des éléments d'un tableau
$reversedNumbers = array_reverse($numbers);
print_r($reversedNumbers);

//array_sum permet de retourner la somme des éléments d'un tableau 
$sum = array_sum($numbers);
echo "La somme du tableau est de " . $sum;
//La réponse est 55 car il a calculé le tout 

//in_array permet de vérifier si une valeur existe dans un tableau 
if(in_array(5, $numbers)) {
    echo "La valeur 5 existe dans le tableau";
}else {
    echo "La valeur 5 n'est pas dans le tableau";
}

//array_diff permet de comparer deux tableaux et de renvoyer les valeurs qui sont presents dans le 1er tableau mais 
//pas dans le second.
$first = array("1,2,3,4,5");
$second = array("3,4,5,6,7");

$difference = array_diff($first,$second);
print_r($difference);

//array_intersect renvoit les valeurs qu'il y a en commun entre les deux tableaux

$communValues = array_intersect($first, $second);
print_r($communValues);

//array_chunck permet de diviser un tableau en plusieurs tableau xplus petits de taille égale ou presque égale

$chunks = array_chunk($numbers, 3);
print_r($chunks)
?>