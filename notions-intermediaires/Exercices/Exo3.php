<!-- Créer un formulaire HTML qui permet à l'utilisateur de saisir une adresse email.
Ensuite, on devra utiliser PHP et les expressions régulières pour vérifier si l'adresse 
email est valide -->


<?php 
if($_SERVER["REQUEST_METHOD"] == 'POST') {
    $email = $_POST['email'];
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";

    if(preg_match($pattern, $email)) {
        echo "L'adresse e-mail $email est valide";
    } else {
        echo "L'adresse e-mail $email n'est pas valide";
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
    <h2>Entrez votre adresse e-mail</h2>
    <form method="POST">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <input type="submit" value="Envoyer">
    </form>
    
</body>
</html>