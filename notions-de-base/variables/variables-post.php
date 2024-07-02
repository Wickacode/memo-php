<!-- Les variables POST contiennent des données envoyées par un formulaire lorsqu'un utilisateur en soumet un.
Les données sont envoyées au serveur PHP via la méthode POST.
Les données sont ensuite stockées dans des variables spéciales appellées variables POST  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="traitementPost.php" method="POST">
        <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom">
        <label for="email">E-mail : </label>
        <input type="email" id="email" name="email">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>