<!-- Les regex sont des expressions régulières. Ce sont des chaînes de caractères qui permettent d'écrire 
un motif ou un modèle de texte que l'on souhaite rechercher ou extraire.
Les expressions régulières en PHP sont définies avec un délimiteur qui sont des caractères qui vont 
entourer l'expression régulière et qui indiquent où elles commencent et où elles se terminent.
Le délimiteur le plus utilisé est le slash (/). Mais il est possible d'utiliser d'autres caractères comme le dièse(#)
ou le point virgule(;). -->

<?php 

$texte = "Explication des regex";

//On crée ce que l'on appelle un pattern 

$pattern = '/regex/'; 

if(preg_match($pattern, $texte)) {
    echo "Le texte contient le mot regex ";
}else {
    echo "Le texte ne contient pas le mot 'regex'";
}

/*Cette méthode est très utile pour surveiller ce que va rentrer l'utilisateur dans les input.
Il existe de nombreuses fonctions PHP pour manipuler les expressions régulières comme "preg_replace"
qui permet de remplacer un motif par un autre ou encore "preg_split" qui permet de diviser une chaîne de caractère
en fonction d'un motif. On utilise un pattern a chaque fois (Le pattern c'est le motif). 
Les expressions régulières sont généralement écrites en utilisant des caractères spéciaux (des métas caractères)
qui ont une signification particulire. Par exemple le point (.) est utilisé pour representer n'importe quel caractère 
tandis que l'axtérisque (*) est utilisé pour indiquer un caractère qui peut apparaître zéro fois ou plus. */

/* Caractères spéciaux : 
* : Indique que le caractère précédent peut apparaître 0 foi sou plus
+ : Indique que le caractère précédent doit apparaître au moins une fois 
? : Indique que le caractère précédent peut apparaître 0 fois ou une seule fois
^ : Indique que le string doit commencer par le caractère ou le groupe de caractère qui suit
$ : Indique que le string doit se terminer par le caractère ou le groupe de caractère qui précède
[] : Indique une classe de caractère qui permet de spécifier un ensemble de caractères possibles
\ : Permet d'échapper unc caractère spécial pour qu'il soit interprété littéralement */

//Exemple : Vérifier qu'une adresse mail est au bon format

$texte2 = "Mon adresse e-mail est jessica@gmail.com";

$pattern2 = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/i";

if (preg_match($pattern2, $texte2, $matches)) {
    echo "L'adresse e-mail est : ".$matches[0];
}else {
    echo "L'adresse e-mail n'est pas valide";
}
?>