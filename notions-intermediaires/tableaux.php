 <!-- Les tableaux permettent de stocker des valeurs sous un même nom.
Il existe deux types de tableaux en PHP : Les tableaux indexés et les tableaux associatifs.
Un tableau indexé est un tableau où chaque élément est associé à un index numérique qui démarre à 0. 
Avec un tableau associatif, chaque élément est associé à un nom ou une clé plutôt qu'a un index numérique.
Les clés peuvent être des chaînes de caractère ou des nombres.-->

<?php 

//Tableau indexé :
$fruits = array("pomme", "banane", "orange", "kiwi");
echo $fruits[1];

//Tableau associatif :
$personne = array("nom" => "Dupont", "prenom" => "Jean", "age" => 30);
echo $personne["prenom"];

//On peut parcourir un tableau à l'aide d'une boucle for ou foreach.

//Avec for:
for($i=0; $i < count($fruits); $i++) {
    echo $fruits[$i]."<br>";
}

//Avec foreach:
foreach($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>