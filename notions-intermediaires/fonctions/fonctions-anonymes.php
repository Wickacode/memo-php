<!-- Les fonctions anonymes sont des fonctions classiques sauf qu'on va pas les déclarer, elles n'auront pas de nom. 
Ces fonctions peuvent être utiles dans certians contextes. Par exemple pour les passer en paramètres à d'autres fonctions
ou pour les stocker dans des tableaux.
Cependant il est important de rappeller que les fonctions anonymes ne peuvent pas être appellées de 
manière récursive, contrairement aux fonctions déclarées de manière classique. -->

<?php 
$saluer = function($nom) {
    echo "Bonjour" . $nom;
};

$saluer(' Jonathan');
?>