<!-- La boucle for est une structure de boucle qui permet d'exécuter un bloc d'instruction 
un certain nombre de fois en utilisant une variable de contrôle.
Cette variable de contrôle est généralement un compteur qu incrémente ou décremente à chaque itération -->

<?php 
/* La syntaxe est la suivante : 
for(initialisation; condition; incrementation) {
instruction
}
*/

for($i=0; $i < 10; $i++) {
    echo $i . "<br>";
}
?>