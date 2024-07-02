<!-- Les variables GET vont contenir des données envoyées via une URL 
Les données sont stockées dans la chaîne de requête de l'URL qui commence par le symbole "?" suivi 
du nom de la variable et de sa valeur séparée par le symbole "=", 
et les différentes variables sont ensuite séparées par le symbole "&" :
http://exemple.com/page.php?nom=Jonathan&mail=mail@gmail.com
Il faut donc noter que les variables GET sont moins sécurisées que les variables POST car elles sont 
affichées dans l'URL, elles sont donc facilement accessibles par l'utilisateur.
Il n'est donc pas recommandé d'envoyer des données sensibles via les variables GET.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="traitementGet.php" method="GET">
        <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom">
        <label for="email">E-mail : </label>
        <input type="email" id="email" name="email">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>