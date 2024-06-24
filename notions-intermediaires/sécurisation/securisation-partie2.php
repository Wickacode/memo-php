<!-- Ici on vérifie si le formulaire renvoit bien une chaîne de caractères -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire et sécurité</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <label for="name">Entrez un nom : </label>
        <input type="text" id="name" name="name">
        <input type="submit" name="submit" value="soumettre">
    </form>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['name'])){
        echo "Le champ est obligatoire";
    }else {
        if(!preg_match("/^[a-zA-Z]*$/", $_POST['name'])) {
            echo "Le nom doit contenir des lettres et des espaces";
        }else {
            $name = $_POST['name'];
            echo "Votre nom est : $name";
        }
    }
}
?>  
</body>
</html>