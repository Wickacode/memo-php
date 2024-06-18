<!-- Switch est une structure de contrôle qui va permettre de simplifier l'écriture
de plusieurs instructions id et else if, et qui va pouvoir tester la même variable.
Elle est souvent utilisée pour les situations où plusieurs valeurs possibles sont 
attendues pour une même variable et/ou une action différente qui doit être 
exécutée pour chaque valeur. -->

<?php
/* La syntaxe est la suivante : 
switch($variable) {
    case valeur1:
        Instructions
        break;
    case valeur2:
        Instructions
        break;
    cdefault:
    Instructions par défault
    break;
}
*/

$couleur = "bleu";

switch($couleur) {
    case "rouge":
        echo "La couleur est rouge";
        break;
    case "vert":
        echo "La couleur est verte";
        break;
    case "bleu":
        echo "La couleur est bleu";
        break;
    default:
    echo "La couleur n'est pas reconnue";
    break;
}
?>