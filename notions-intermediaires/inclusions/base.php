<!-- Cette fonction est une base pour voir 3 différentes méthodes d'inclusion dans un autre fichier:
Include / require / require once 
Toutes ces méthodes permettent d'inclure le contenu d'un fichier dans un script PHP 
mais elles ont quelques différences en terme de gestions d'erreurs et de la façon dont les fichiers sont inclus -->

<?php 
function hello(){
    echo "Hello depuis test php";
}
hello();
?>