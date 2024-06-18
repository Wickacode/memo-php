<!-- L'opérateur ternaire est une alternative a la structure if et else, qui permet de 
définir un structure conditionelle en une seule ligne -->

<?php 
/* Syntaxe de base : 
(condition)?resultatTrue:resultatFalse
*/

$age = 18;

$resultat = ($age>=18)?"majeur":"mineur";
echo "Vous êtes " . $resultat . ".";
?>