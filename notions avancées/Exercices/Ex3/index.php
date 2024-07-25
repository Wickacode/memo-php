<!--
Considérer le scénario suivant :

Vous avez crée un site web qui permet à l'utilisateur de se connecter en entrant son nom d'utilisateur 
et son mot de passe. Lorsque l'utilisateur se connecte, vous voulez stocker ses informations de connexion
dans une session, afin de pouvoir les utiliser sur d'autres pages du site.

La consigne :

Ecrire un script PHP qui affiche une page de connexion avec un formulaire permettant à l'utilisateur d'entrer 
son nom d'utilisateur et son mot de passe. Lorsque le formulaire est soumis, le script vérifie les informations de connexion 
de l'utilisateur et, si elles sont correctes, stocke le nom d'utilisateur dans un session et redirige d'utilisateur
vers une page protégée.
-->

<?php 
session_start();

if(isset ($_SESSION['username'])) {
    header('Location : compte.php');
    exit();
}

if(isset($_POST['username']) && isset($_POST['password'])) {
$username = $_POST['username'];
$password = $_POST['password'];

if($username === 'Jonathan' && $password === '1234') {
    $_SESSION['username'] = $username;
    header('Location : compte.php');
    exit();
} else {
    $error = 'Nom d\'utilisateur ou mot de passe incorrect';
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
    
<?php if(isset($error)):?>
    <p><?= $error; ?></p>
<?php endif ?>;

<form method="POST">
    <label for="username">Nom d'utilisateur:</label>
    <input type="text" id="username" name="username">
    <br><br>
    <label for="password">Mot de passe</label>
    <input type="text" id="password" name="password">
    <br><br>
    <input type="submit" value="Se connecter">
</form>
</body>
</html>