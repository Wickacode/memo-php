<!-- Voici la partie 2 sur les méthodes le plus utilisées liés aux chaînes de caractère -->
<?php 
$string = "<script> alert('Hello') </script>";

//htmlspecialchars est une méthode qui convertit les caractères spéciaux en entité HTML.
//Ce qui permet d'éviter les problèmes de sécurité lors de l'affichage de la chaîne de caractère dans une page web.
//C'est intéressant à utiliser lorsqu'on récupère des données dans un formulaire.

$encode = htmlspecialchars($string);
echo "$encode"; //Renvoit une chaîne de caractère avec les balises.

//strcasecmp compare 2 chaînes de caractères en ignorant la casse.
$string2 = "hello";
$string3 = 'Hello';

if(strcasecmp($string2, $string3) == 0) {
    echo "String identique"; //Cela va ignorer la casse, donc la majuscule en début de phrase, et va renvoyer un string identique.
}else {
    echo "String non identique";
}

//ucFirst va mettre la 1ere lettre d'un mot en majuscule 
$string4= "hello, world";

$firstChar = ucfirst($string4[0]);
$newString = $firstChar.substr($string4,1);

echo "$newString";

//ucwords va mettre la 1ere lettre de chaque mot en majuscule dans une chaîne de caractère
$newString = ucwords($string4);
echo "$newString";

//strrev va renverser l'ordre de la chaine de caractère
$reverse = strrev($string4);
echo "$reverse";

//sprint va formater une chaine de caractère en remplaçant des spécificateurs de format par des valeurs spécifiques.
$name = "Jonathan";
$age = 30;

$message = sprintf("Je suis %s et j'ai %d years old", $name, $age);

echo "$message";

?>