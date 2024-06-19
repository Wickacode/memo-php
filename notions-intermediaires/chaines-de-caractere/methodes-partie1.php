<!-- Voici la partie 1 sur les méthodes le plus utilisées liés aux chaînes de caractère -->

<?php
$string = "Hello, World";

// strlen est la fonction qui renvoit la longueur de la chaîne de caractère
$lenght = strlen($string);
echo"$lenght"; // renvoit 12. Il prend en compte la virgule et l'espace.

//substr est la fonction qui renvoit une sous chaîne de caractère depuis la chaîne de caractère de base à partir d'un index de départ.
$start = 6;
$lenght2 = 5;

$substring = substr($string, $start, $lenght2);
echo"$substring"; // Renvoit "worl" car on lui indique de récupérer l'index 6 de $string et coupe le mot d'une longueur de 5.

//strpos renvoit l'index de la première occurrence d'une sous chaine de caractère que l'on va rechercher dans notre chapine de caractère principale.
//Si la sous chaîne n'est pas trouvée, cela va renvoyer false.
$search = "world";
$position = strpos($string, $search);

if($position !== false) {
    echo "$search est a la position $position";
} else {
    echo "$search n'est pas présent dans la chaîne de caractère";
}

//str_replace va remplacer toutes les occurrences de la sous-chaîne de caractère par la chaîne de caractère que l'on souhaite.
$replace = "everyone";
$newString = str_replace($search, $replace, $string);
echo "Nouvelle chaîne : $newString";

//strtolower permet de renvoyer une version minuscule de la chaîne de caractère
$lowercase = strtolower($string);
echo($lowercase);

//strtoupper permet de renvoyer une version majuscule de la chaîne de caractère
$uppercase = strtoupper($string);
echo "$uppercase";

//trim permet d'effacer les blancs, les espaces en début et fin de caractère.
$trimmed = trim($string);
echo "$trimmed";

//str_split divise la chaîne de caractère en un tableau
$split = str_split($string,1);
print_r($split);

//explode divise la chaîne de caractère en un tableau en utilisant un délimiter 
$delimiter = " ";
$words = explode($delimiter, $string);
print_r($words);

//implode va concaténer tous les éléments d'un tableau en une seule chaîne de caractère en utilisant un séparateur 
$array = array('Hello', 'world');
$concat = implode('-', $array);
echo"$concat";

?>