<!-- While et Do while sont des structure de boucle qui permettent d'exécuter un bloc d'instructions 
tant qu'une condition est vraie. La structure "While" est la plus simple des deux.
Elle teste la condition au début de la boucle et n'exécute le bloc que si l'instruction est vraie.

La boucle Do while, elle, est similaire à While mais elle va vérifier la condition à la fin de la boucle.
C'est-à dire que le bloc d'instruction va être exécuté au moins une fois avant que la condition ne soit respectée.
Même si la condition est fausse, il va quand même itérer la boucle. -->

<?php 
/*
Voici la syntaxe de While : 

while(condition) {
instructions
}

*/

$compteur = 1;

while($compteur <= 10) {
    echo $compteur . "<br>";
    $compteur ++;
}

//Do while :

$compteur2 = 15;

do {
    echo $compteur2 . "<br>";
    $compteur2++;
} while($compteur2 <= 10)
?>