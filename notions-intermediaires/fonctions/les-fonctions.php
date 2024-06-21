<!-- Les etapes pour créer une fonction :
- Il faut définir le nom de la fonciton (celui-ci doit être unique et descriptif de ce que la fonction fait)
- On définit les paramètres de la fonction (les paramètres sont les valeurs que la fonction prend en entrée, 
on peut en définir aucune ou plusieurs. Les paramètre sont séparés par des virgules et définies entre parenthèses.
- Ecrire le code a exécuter entre les accolades
- Retourner une valeur (optionnel) si l'on souhaite que la fonction en retourne une, que l'on définit avec "return" suivi
du nom de la valeur à retourner  -->

<?php 

function calculerMoyenne($nombre1, $nombre2){
    $moyenne = ($nombre1 + $nombre2) /2;
    return $moyenne;
}

$resultat = calculerMoyenne(4,6);
echo $resultat;

//On peut également créer une fonction qui utilise 2 variables.
function afficherSomme($a, $b) {
    $somme = $a + $b;
    echo "La somme de $a et $b est égal à $somme";
}

$x = 3;
$y = 5;

afficherSomme($x, $y);
?>