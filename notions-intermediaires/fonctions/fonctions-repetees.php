<!-- Il est important dans la programmation de ne pas se répéter.
On peut créer une fonction personnalisée en PHP et la répéter sur plusieurs éléments pour éviter les répétitions.
Cette manière a plusieurs avantages : 
-On économise du temps (On peut réutiliser le code sur plusieurs éléments)
-Une meilleure organisation (En créant des fonctions personnalisées, le est code plus lisible)
-Les réductions des erreurs 
-La flexibilité (Modifier et adapter les fonctions adaptables a différentes parties d'un projet)
-Facilite la maintenance du code -->

<?php 

function maFonction() {
    echo "Bonjour";
}

for($i=0; $i<10; $i++){
    maFonction(); //Retourne "Bonjour" 10x
}

//Fonctions récursives : Une fonciton récursive s'appelle elle-même avec un argument différent
function maFonctionRecursive($n){
    if($n<=0){
        return;
    }

    echo "Appel de ma fonction avec n=$n";
    maFonctionRecursive($n -1); //Ici on exécute une fonction à l'intérieur d'une autre fonction 
}

maFonctionRecursive(5);

//On peut également utiliser des fonctions anonymes avec la fonction away_walk. 
//Elle prend en 1er argument le tableau, en second, une fonction, $item en paramètres, et qui va appeller la fonction.
function maFonction2($element) {
    echo $element."<br>";
}

$array = array("un","deux","trois");

array_walk($array,function($item){
    maFonction2($item);
})
?> 