<?php 
$dateString = '2023-04-19';

//strtotime est une fonction qui va convertir une date et une heure sous forme de chaîne de caractère
//en un timestamp Unix, donc qui va ici récupérer en paramètre la variable dateString et va nous donner
//le nombre de sc qui s'est écoulé depuis le timestamp jusqu'au 19 avril 2023
$timestamp = strtotime($dateString);

echo $timestamp;

//mktime est une fonction qui va permettre de créer un timestamp Unix à partir d'une date et d'une heure spécifique, 
//en utilisant des paramètres indivicuels pour l'année, le mois, le jour, l'heure et les minutes.

$timestamp2 = mktime(0,0,0,4,19,2023);
echo $timestamp2;
?>