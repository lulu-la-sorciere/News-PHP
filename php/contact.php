<?php

// Salut !!!
// Oui, je suis le premier fichier PHP exécuté pour oNews, mais malheureusement, je ne fais rien du tout :(
// A toi d'ajouter des lignes afin que je sois utile :D
include 'inc/data.php';

var_dump($_POST);

// isset : Is Set ? Est-ce défini ?
// Isset permet de tester l'existence d'une variable
if (isset($_POST['lastname'])) {

    $userName = $_POST['lastname'];
    
    // Si le nom saisi n'est pas vide 
    // "!" permet de tester le contraire d'une assertion
    // Ce test permet de s'assurer que la variable n'est pas vide
    // Elle est peut etre définie (la clé "lastName" existe bien dans le), mais pas nécessairement remplie...Sauf si on rajoute un trim :-)
    // $userName = trim($_POST['lastname']);
    if (!empty($userName)) {
        // Si la variable $userName n'est pas (!) vide...alors
        // on affiche
        echo "Bravo, vous avez saisi votre nom : {$userName}";
    } else {
        echo "Vous devez saisir votre nom !";
    }

} else {
    echo 'Mon formulaire est vide';
}

// On va inclure au moins ces trois fichiers de templates
// à la fin du fichier
include 'inc/header.tpl.php';
include 'inc/contact.tpl.php';
include 'inc/footer.tpl.php';