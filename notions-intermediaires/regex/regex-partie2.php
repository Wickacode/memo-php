<!-- Voici un exemple de regex directement avec un formulaire -->

<?php 
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $texte = $_POST["texte"];
    $pattern = "/[A-Z][a-z]+/"; //Il faut que la 1ère lettre soit en majuscule

    if(preg_match_all($pattern, $texte, $matches)) {
        echo "Les mots commençant par une majuscule sont : ";
        foreach($matches[0] as $mot) {
            echo "$mot";
        }
    } else {
        echo "Il n'y a aucun mot qui commence par une majuscule";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire et regex</title>
</head>
<body>
    <form method="POST">
        <label for="text">Entrez votre texte</label>
        <input type="text" id="texte" name="texte">
        <button type="submit">Rechercher</button>
    </form>
    
</body>
</html>