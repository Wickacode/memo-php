<!-- Les cookies en PHP sont des petits fichiers de texte stockés sur l'ordinateur d'un utilisateur
qui peuvent être utilisés pour stocker des informations sur les préférences d'un utilisateur ou poursuivre
les actions d'un utilisateur sur un site web0
Ils sont stockés sur un navigateur, donc sur le navigateur de l'utilisateur.
Ils peuvent être lus par le serveur web lors de chaque demande de page.
Le fonctionnement des cookies en php est le suivant : 
setcookies(nom, valeur, expire, chemin, domaine, sécurité, httpsonly)
-->

<!DOCTYPE html>
<html>
    <head>Formulaire de saisie</head>
<body>
    
<form action="traitement.php" method="POST">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" value="<?= isset($_COOKIE['username'])? htmlspecialchars($_COOKIE['username']) : '';?>"> //Mémorisation
    <br><br>
    <label for="age">Age</label>
    <input type="text" name="age" id="age">
    <br><br>
    <input type="submit" valur="Envoyer">
</form>
</body>
</html>