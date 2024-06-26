<!-- Ecrire un programme qui demande à l'urilisateur de saisir son age.
Utiliser l'opérateur ternaire pour vérifier si l'utilisateur est majeur.-->

<?php 
if(isset($_POST['age'])) {
    $age = $_POST['age'];
    $message = ($age >= 18)? "Vous êtes majeur":"Vous êtes mineur";

    echo $message."<br>";
    echo "Votre age est de ".$age." ans";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="age">Quel age avez-vous ?</label>
        <input type="number" name="age" id="age" min="0" required>
        <br>
        <input type="submit" value="Envoyer">

    </form>
</body>
</html>