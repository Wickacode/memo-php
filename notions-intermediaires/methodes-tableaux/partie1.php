<!-- Voici la partie 1 sur les méthodes le plus utilisées sur les tableaux -->
<?php 
//Après la variable on peut soit mettre = array("nom") etc.. ou bien mettre directement des crochets
$names = ["Karine", "Leslie", "Anne", "Dave"];

echo "Le tableau contient " .count($names). " noms<br>";
//(retourne "Le tableau contient 4 noms")

//array_push permet d'ajouter une nouvelle valeur au tableau
array_push($names, "Eve");
echo "Le tableau après l'ajout de l'élément : " .implode(",", $names). "<br>";
echo "Le tableau contient " .count($names). " noms<br>";

//array_pop permet de supprimer la dernière valeur du tableau
$last = array_pop($names);
echo "Le tableau après la supression du dernier élément ($last): " .implode(",", $names). "<br>";

//array_shift permet de supprimer la première valeur du tableau
$first = array_shift($names);
echo "Le tableau après supression du premier élément ($first): " .implode(",", $names). "<br>";

//array_unshift permet d'ajouter un ou plusieurs éléments au début du tableau 
array_unshift($names, "Coralie");
echo "Le tableau après l'ajout d'un élément au début : ".implode(",", $names). "<br>";

//Slice permet de retourner une partie d'un tableau 

$slice = array_slice($names, 2, 2); //A partir de l'index 2, ça prend 2 éléments.
echo "La tranche du tableau [2:4]:".implode (",", $slice). "<br>";

//La méthode merge permet de fusionner 2 ou plusieurs tableaux en 1 seul tableau 

$moreNames = ["Franck", "Grace"];
$merge = array_merge($names, $moreNames);

echo "Les deux tableaux fusionés: ".implode (",", $merge). "<br>";

//La méthode sort permet de trier un tableau dans l'ordre croissant
sort($names);
echo "Le tableau trié par ordre croissant : " .implode (",", $names). "<br>";

//La méthode rsort permet de trier un tableau dans l'ordre croissant
rsort($names);
echo "Le tableau trié par ordre croissant : " .implode (",", $names). "<br>";

?> 