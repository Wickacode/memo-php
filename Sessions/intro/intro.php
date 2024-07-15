<!-- En PHP une session est un mécanisme qui va permettre de stocker des sonnées côité serveur pour un 
utilisateur spécifique. Tout au lond de sa visite sur un site web, les données vont être stockées dans une 
session qui vont pouvoir être utilisés pour garder une trace de l'état de l'utilisateur ou pour stocker 
des informations spécifiques à l'utilisateur, comme son nom , ou son panier d'achat.
Lorsqu'un utilisateur visite votre site web, un identifiant de session unique est généré pour cet utilisateur.
Ce numéro d'identification est stocké sur le serveur et puis il est renvoyé à l'utilisateur sous la forme 
d'un cookie ou d'un paramètre d'URL.
Ce cookie ou ce paramètre est ensuite utilisé pour identifier l'utilisateur lorsqu'il effectue des requêtes
ultérieures. Les variables de session en PHP sont stockées dans un tableau associatif appelé "$_SESSION"
-->

<?php
//Pour inclure une session, on va démarrer une session à partir de la fonction "session start"
session_start();
$_SESSION //Cette variable sert à stokcer des données dans une session 
?>