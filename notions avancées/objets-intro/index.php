<!-- Les objets sont des instances de classe qui sont des modèles de données et de comportement 
Les classes vont nous permettre de définir un ensemble de propriétés, donc des variables et des méthodes 
(des fonctions déclarées dans les classes).
Pour créer une instance de classe on va créer le mot clé "New" suivi du nom de la classe et éventuellement 
des arguments pour le constructeur de la classe.
-->

<?php

//Création de la classe Person avec deux propriétés public name et public age
class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //Méthode greet qui affiche une salutation pesonnalisée en utilisant les propriétés de l'objet.
    public function greet()
    {
        echo "Hello je m'appelle " . $this->name . " et j'ai " . $this->age . " ans";
    }
}
//Création d'une instance de classe Person en utilisant le constructeur de classe et en passant 
//les arguments John et 30.
$person = new Person("John", 30);
//Appel de la méthode greet sur cette instance
$person->greet();

?>
