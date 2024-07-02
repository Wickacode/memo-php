<?php 

$a = 3.14;

//La fonction "floor" arrondi à l'entier inférieur 
$b = floor($a);

//La fonction "ceil" arrondi à l'entier supérieur
$c = ceil($a);

//La fonction "sqrt" renvoi la racine carrée.
$d = sqrt($a);

//La fonction "pow" évalue la puissance
$e = pow($a, 2);

//La fonction "exp" permet de calculer la valeur exponentielle d'un nombre
$f = exp($a);

//Les fonctions log et log10 permettent de calculer logarithmes naturels et décimales d'un nombre respectif.
$g = log($a);
$h = log10($a);

//Les fonctions trigonométriques permetent de calculer des valeurs des fonctions trigonométriques d'un angle en radian
$i = pi()/4;
$j = sin($i);
$k = cos($i);
$l = tan($i);

?>

<?="<p>$b</p>" ?> <!--Retourne 3-->
<?="<p>$c</p>" ?> <!--Retourne 4-->
<?="<p>$d</p>" ?> <!--Retourne 1.7720045146669-->
<?="<p>$e</p>" ?> <!--Retourne 9.8596-->
<?="<p>$f</p>" ?> <!--Retourne 23.103866858722-->
<?="<p>$g</p>" ?> <!--Retourne 1.1442227999202-->
<?="<p>$h</p>" ?> <!--Retourne 0.49692964807321-->