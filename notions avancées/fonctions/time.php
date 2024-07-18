<!-- La fonction time peut être utilisée pour obtenir l'heure actuelle du serveur web ou pour 
effectuer des calculs de temps.
Par exemple, si l'on a besoin de calculer la différence entre 2 moments dans le temps, nous pouvons 
utiliser la fonction time pour obtenir les timestamp Unix correspondants et effectuer 
les soustractions qui correspondent. -->

<?php 
$current_time = time();

echo $current_time; // Cela renvoit un nombre comme "1721288783". Il s'agit du nombre de secondes qui est 
                    // écoulé depuis le 1er janvier 1970 à minuit jusqu'à aujourd'hui.
                    // 1er janvier 1970 est comme l'année 0 d'internet.
                    // Il est important de notoer que la fonction time utilise l'horloge d'internet pour 
                    // déterminer le temps, ce qui peut parfois entraîner des incohérences si l'horloge
                    // du serveur est mal configurée.
// Dans de tels cas, il est préférable d'utiliser une source de temps externe comme une horloge atomique 
// pour obtenir une mesure plus précise du temps.

?>