<!-- Ecrire un script qui affiche le prix d'un produit en ligne en fonction de son code.
Utiliser les conditions avec Switch.  Le format du code produit est le suivante XXXX exemple : "A123" -->

<?php
$codeProduit = "A126";

switch ($codeProduit) {
    case "A123":
        echo "Le prix du produit est de 10.00€";
        break;

    case "A124":
        echo "Le prix du produit est de 15.00€";
        break;

    case "A125":
        echo "Le prix du produit est de 25.00€";
        break;

    default:
        echo "Nous n'avons plus ce produit";
}
?>

