<!--
Considérer le scénario suivant :

Vous avez crée un site web qui permet à l'utilisateur de choisir une langue d'affichage pour le site.
Vous voulez stocker la langue choisie par l'utilisateur dans un cookie, afin de lui permettre de retrouver
cette langue lorsqu'il revient sur le site ultérieurement.

La consigne :

Ecrire un script PHP qui affiche une page d'accueil avec un formulaire permettant à l'utilisateur
de choisir une langue d'affichage. Lorsque le formulaire est soumis, la langue choisie par l'utilisateur
est stockée dans un cookie et l'utilisateur est redirigé vers la même page d'accueil, qui doit maintenant
être affiché dans la langue choisie.
-->

<?php 
if(isset($_COOKIE['lang'])){
    $lang = $_COOKIE['lang'];
} else {
    $lang ='fr';           
}

if(isset($_POST['lang'])) { //Si le formulaire a été soumis on va mettre à jour la langue dans le cookie
    $lang = $_POST['lang'];
    setcookie('lang', $lang,time() + (86400 * 30),'/'); //Le cookie expire dans 30 jours
    header('location:'.$_SERVER['PHP_SELF']);
    exit();
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
<?php if($lang === 'fr'):?>
<h1>Bienvenue sur mon site web</h1>

<?php elseif($lang === 'en'):?>
<h1>Welcome to my website</h1>

<?php elseif($lang === 'es'):?>
<h1>Bienvenido a mi sitio web</h1>
<?php endif; ?>



<form method="POST">
    <label for="lang">Langue:</label>
    <select name="lang" id="lang">
        <option value="fr" <?php if($lang === 'fr') echo 'selected';?>>Français</option>
        <option value="en" <?php if($lang === 'en') echo 'selected';?>>Anglais</option>
        <option value="es" <?php if($lang === 'es') echo 'selected';?>>Espagnol</option>
    </select>
    <br>
    <input type="submit" value="Sauvegarder">
</form>
    
</body>
</html>