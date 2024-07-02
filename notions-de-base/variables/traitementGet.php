<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nom = $_GET['nom'];
    $email = $_GET['email'];

    echo "Le nom est : ". $nom;
    echo "<br>";
    echo "L'email est : ".$email;
    ?>

    <p><?= $nom ?></p>
    <p><?= $email ?></p>
</body>
</html>