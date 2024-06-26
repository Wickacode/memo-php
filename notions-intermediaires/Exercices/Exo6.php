<!-- Ecrire un script qui demande à l'utilisateur d'entrer un prix entier positif dans un formulaire.
Si la valeur entrée est bien un entier positif, affiche le prix du produit en fonction de sa valeur. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="prix">Entrez un prix: </label>
        <input type="number" name="prix" id="prix" min="0" stp="1" required>
        <input type="submit" value="Afficher le prix">
    </form>

    <?php 
    if(isset($_POST['prix']) && is_numeric($_POST['prix']) && floor($_POST['prix']) == $_POST['prix']) {
        $prix = $_POST['prix'];

        if($prix >= 0 && $prix < 10){
            echo "<p> Le prix du produits est inférieur à 10.00€ </p>";
        } else if($prix >= 10 && $prix <20) {
            echo "<p>Le prix du produit est compris entre 10.00€ et 20.00€</p>";
        } else if($prix >= 20 && $prix <30) {
            echo "<p> Le prix du produit est compris entre 20.00€ et 30.00€</p>";
        } else {
            "<p>Le prix du produit est supérieur à 30.00€</p>";
        }
    } else if (isset($_POST['prix'])){ 
        echo "<p> Veuillez entrer un nombre entier positif</p>";
    }
    ?>
</body>
</html>