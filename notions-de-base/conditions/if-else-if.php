<!--Les conditions sont utilisées pour exécuter du code en fonction de certaines conditions.
La structure de base est la suivante : 
if(condition){
    code à exécuter si la condition est vrai. Sinon, il va ignorer le code.
}
-->

<?php
$age = 18;

if($age>=18) {
    echo"Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
}

$jour = "dimanche";

if($jour == "samedi" || $jour == "dimanche") {
    echo "Nous sommes le week end";
}else {
    echo "Nous ne sommes pas le week end";
}
?>
