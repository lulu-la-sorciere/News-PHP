<?php 

// On va pouvoir intercepter et traiter les informations
// transmises depuis le formulaire

// Grâce aux superglobales de PHP (variables que l'on peu appeler de n'importe quel fichier PHP), on va pouvoir récupérer nos données

// Si la méthode utilisée est en POST, on récuperera les 
// données grâce à la variable $_POST
// $_POST est un tableau associatif.
var_dump($_POST);

// Bonjour leNOM (leMail). Nous avons bien reçu votre message : LeMessage
// La fonction PHP trim permet de supprimer les espaces avant et après une chaine de caractères

// Par sécurité, on ne fera jamais confiance au client ! 
// Never trust user input ==> On vérifiera toujours les données
// qu'il nous envoie

if (!empty($_POST)) {
    // Si le formulaire a été soumis (La variable $_POST n'est pas vide)....
    // alors on récupère ces informations
    $userName = trim($_POST['user_nom']);
    $userEmail = $_POST['user_mail'];
    $userMessage = $_POST['user_message'];
    
    if ($userName === '') {
        echo 'Erreur : vous devez saisir un nom';
    }
    
    // La fonction empty permet de savoir si une variable est vide (empty)
    if (empty($userEmail)) {
        echo 'Erreur : vous devez saisir un email';
    }
    
    echo "Bonjour " . $_POST['user_nom']. ' (' . $_POST['user_mail']. ')'. ' Nous avons bien reçu votre message : '. $_POST['user_message'];
} else {
    echo 'Le formulaire est vide !';
}



// Si la méthode utilisée est en GET, on récupérera les données
// grâce à la variable $_GET
var_dump($_GET);

