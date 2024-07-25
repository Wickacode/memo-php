<?php
if(isset($_POST['submit'])) { //Est ce que la superglobale $_POST submit est définie ? 
    session_start(); //Si oui, on démarre une session 

    $_SESSION ['nom'] = $_POST['nom']; //On donne une valeur à la session
    header('location: compte.php');
}

if(isset($_POST['save']) && $_POST['save'] == "on") { // Si la checkbox est activé, alors ça lance la création d'un cookie
    setcookie('name', $name, time()+3600,null,null,false,true);
} else {

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

if(isset($_COOKIE['name'])){// Si la cookie name est déclarée, on crée une variable 'valeur'
    $valeur = 'value'.$_COOKIE['name'].'"';
} else {
    $valeur = "";
}
?>
    
<form method="POST">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" <?= $valeur;?>>
    <br>
    <br>
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom">
    <br>
    <br>
    <label for="save">Garder les informations</label>
    <input type="checkbox" name="save" id="save">
    <br>
    <br>
    <input type="submit" name="submit" value="Envoyer"></input>
</form>
</body>
</html>