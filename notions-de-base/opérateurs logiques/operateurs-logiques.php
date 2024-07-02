<?php
$age = 18;

if($age==18) {
    echo"Vous avez 18 ans";
} else if($age == 12){
    echo "Vous avez 12 ans";
} else if($age == 25) {
    echo "Vous avez 25 ans";
} else {
    echo "Nous n'avons pas de résultats pôur votre age";
}

$age2 = 18;
$ville = "Paris";
$estEtudiant = true;

//Le "||" signifie que 2 conditions doivent être respectées
if($age2 > 18 && $ville = "Paris") {
    echo "Vous êtes majeur et vous vivez à Paris";
}

if($age2 < 198 || $estEtudiant == true || $ville = "Paris") {
    echo "Vous beneficiez d'une réduction étudiant";
}

if(!$estEtudiant) {
    echo "Vous ne béneficiez pas d'une réduction étudiant";
}

?>