<!-- Ecrire un programme qui vérifie si une chaîne de caractères entrée par l'utilisateur correspond 
à un code postal français valide. Un code postal frrançais contient 5 chiffres.-->

<?php 
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(isset($_POST['codepostal'])) {
        $codepostal = $_POST['codepostal'];
        $pattern = "/^[0-9]{5}$/";

        if(preg_match($pattern, $codepostal)) {
            echo "Le code potal $codepostal est valide";
        } else {
            echo "Le code postal $codepostal n'est pas valide";
        }
    }
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
        <label for="codepostal">Entrez un code postal</label>
        <input type="text" id="codepostal" name="codepostal">
        <button type="submit">Vérifier</button>
    </form>
</body>
</html>
