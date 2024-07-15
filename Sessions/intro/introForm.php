<?php 
session_start();

if(isset($_POST['nom'])) {
    $nom = $_POST['nom'];

    $_SESSION['nom'] = $nom;
    echo 'Bonjour." $nom.", merci d\'avoir rempli le formulaire';
}
?>
