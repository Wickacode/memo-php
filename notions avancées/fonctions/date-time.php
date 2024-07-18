 <?php
$date = new DateTime(); //heure actuelle 

echo $date->format('Y-m-d H:i:s');

// Créer un objet DateTime à partir d'une chapine de caractère
$date2 = new DateTime('2023-04-19');

//On peut ajouter des journées ou en soustaire avec "+" ou "-". On peut aussi utiliser "day" "month" ou "year"
$date2->modify('+1 day');

//On peut comparer deux dates
$premDate = new DateTime(2022-04-19);
$secDate = new DateTime(2024-04-19);

if($premDate < $secDate) { //Si la date 1 est inférieure à la date 2
    echo "La date 1 est antérieur à la date 2";
}
echo $date2->format('Y-m-d');
 ?>