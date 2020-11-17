<?php

use App\Model\PollModel;


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un sondage</title>
</head>
<body>

    <!-- formulaire de création du sondage -->
    <form action="index.php?page=poll" method="GET">

        <input type="text" name="poll_title" placeholder="Choisir une question">
        <input type="text" name="poll_answer1" placeholder="Choix numéro 1">
        <input type="text" name="poll_answer2" placeholder="Choix numéro 2">

        <select name="poll_limit">
            <option value="5">5 minutes</option>
            <option value="15">15 minutes</option>
            <option value="30">30 minutes</option>
            <option value="60">1 heure</option>
        </select>

        <!-- Bouton d'envoie du formulaire  -->
        <input type="submit" placehoder="Créer le sondage">
        
    </form> 

    
    <?php
    var_dump($polls);

    session_start();

    if(isset($_POST["poll_title"]) && isset($_POST["poll_answer1"]) && isset($_POST["poll_answer2"]) && isset($_POST["poll_limit"])){
        $_SESSION['poll_title'] = $_POST["poll_title"];
        $_SESSION['poll_answer1'] = $_POST["poll_answer1"];
        $_SESSION['poll_answer2'] = $_POST["poll_answer2"];
        $_SESSION['poll_limit'] = $_POST["poll_limit"];
    }
    


    ?>









</body>
</html>