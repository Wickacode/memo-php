<!-- Dans cette partie on va voir comment on peut sécuriser les entrées que va entrer l'utilisateur dans nos inputs -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire et sécurité</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <label for="number">Entrez un nombre entier : </label>
        <input type="number" id="number" name="number">
        <input type="submit" name="submit" value="soumettre">
    </form>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["number"])) { 
        echo "Le champ nombre est obligatoire";
    } else {
        if(!filter_var($_POST['number'], FILTER_VALIDATE_INT)) { //Vérifie si le nombre est un nombre entier
            echo "Le nombre doit être un nombre entier";
        }else {
            $number = $_POST['number'];
            echo "Le nombre que vous avez entré est : $number";
        }
    }
}
?>  
</body>
</html>