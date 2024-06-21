<!-- Une fonction avec des paramètres par défault permet a la fonction d'être appellée 
sans que tous les paramètres soient passés.-->

<?php
function afficherMessage($message = "Bonjour"){
    echo$message;
}

afficherMessage(); // Va afficher "Bonjour

afficherMessage("Salut") // On place une valeur à notre paramètre. Mais si on n'indique pas de valeur il en a une par défault (Bonjour)

?>