<!-- La fonction date est utilisée pour formater la date et l'heure actuelle en fonction d'un format spécifique.
La fonction date prend deux paramètres obligatoires : le format date et l'heure souhaitée.
Un paramètre facultatif pour spécifier le temps à formater en tant que timestamp et si aucun paramètre
de temps est spécifiée, la fonction date utilise l'heure actuelle du serveur.
Le format de la date et de l'heure est spécifiée en utilisant des lettres spéciales appelées "caractères de formatage"
(par exemple, le D représente le jour pour "day" et le caractère Y represente l'année.)
-->

<?php 
$current_time = time();

$formatted_time = date("Y-m-d- H-i-s", $current_time); //On formate l'heure sous le format année/mois/jour

echo $formatted_time;
?>