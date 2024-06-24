<!-- Créer une fonction PHP qui affiche un formulaire de contact. -->

<?php

function showContactForm() {
    echo "<form method='POST'>";
    echo "<label for='nom'> Nom: </label>";
    echo "<input type='text' id='nom' name='nom' required> <br>";
    echo "<label for='prenom'> Prenom: </label>";
    echo "<input type='text' id='prenom' name='prenom' required> <br>";
    echo "<label for='email'> Email: </label>";
    echo "<input type='email' id='email' name='email' required> <br>";
    echo "<label for='message'> message: </label>";
    echo "<textarea id='message' name='message'required></textarea> <br>";
    echo "<input type='submit' value='Envoyer'>";
    echo "</form>";

}

showContactForm();
?>