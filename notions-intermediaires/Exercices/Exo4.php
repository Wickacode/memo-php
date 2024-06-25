//Ecrire un script qui affiche les tables de multilication de 1 à 10 à l'aide deux boucles for 


<?php 
for($i= 1; $i <= 10; $i++){
    echo "<h2> Table de multiplication de $i</h2>";
    echo "<ul>";

    for ($j = 1; $j <= 10; $j++) {
        $resultat = $i * $j;
        echo "<li>$i x $j = $resultat </li>";
    }
    echo "</ul>";

}
?>