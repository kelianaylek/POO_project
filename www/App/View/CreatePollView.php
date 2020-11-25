<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un sondage</title>
</head>
<body>

    <!-- formulaire de création du sondage -->
<h1>Créer un nouveau sondage</h1>

    <form method="POST">

        <input type="text" name="poll_title" placeholder="Choisir une question">
        <input type="text" name="poll_answer1" placeholder="Choix numéro 1">
        <input type="text" name="poll_answer2" placeholder="Choix numéro 2">

        <select name="poll_limit">
            <option value="5">5 minutes</option>
            <option value="15">15 minutes</option>
            <option value="30">30 minutes</option>
            <option value="45">45 minutes</option>
            <option value="60">60 minutes</option>
        </select>

        <!-- Bouton d'envoie du formulaire  -->
        <input name="sendPollToDb" type="submit" placehoder="Créer le sondage">
        
    </form> 

<?php


    ?>






</body>
</html>