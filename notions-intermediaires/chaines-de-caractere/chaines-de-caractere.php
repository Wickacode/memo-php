<!-- Bases sur les différentes manières d'inclure des chaînes de caractère -->

<?php 

$string = 'Bonjour tout le monde'; //Simples quotes
$string2 = "Je m'appelle Jessica"; //Doubles quotes

$name = "Franck";
$string3 = "Bonjour, je m'appelle $name";

$string4 = "Il y a\nune nouvelle ligne dans cette chaîne"; // "\n" crée un espace
$string5 = "Bonjour " .$name; // Concaténation

echo $string;
echo $string2;
echo $string3;
echo $string4;
echo $string5;
?>