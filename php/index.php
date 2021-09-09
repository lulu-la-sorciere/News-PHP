<?php

// Salut !!!
// Oui, je suis le premier fichier PHP exécuté pour oNews, mais malheureusement, je ne fais rien du tout :(
// A toi d'ajouter des lignes afin que je sois utile :D

// On mettra nos données en haut du fichier (variables, ...)
// pour qu'elles soient accessibles dans les templates
// Tout ce qui sera déclaré avant le templates (.tpl.php) seront
// disponibles dans ces templates.
include 'inc/data.php';

// On va inclure au moins ces trois fichiers de templates
// à la fin du fichier

// La variable $menu du fichier data.php sera également 
// disponible dans le fichier header.tpl.php, home.tpl.php, footer.tpl.php
include 'inc/header.tpl.php';
include 'inc/home.tpl.php';
include 'inc/footer.tpl.php';