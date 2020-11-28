<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Afficher le user name -->
<h1>Bienvenue <?php echo($user[0]->user_name)?></h1>
<!-- <h1>Bienvenue <?php echo($_SESSION["user_name"])?></h1> -->

<a href="?page=deconnexion">Se deconnecter</a>

<a href="?page=profil">Modifier mes infos</a>

<a href="?page=friends">Mes amis</a>


<h2>Mes sondages passés :</h2>
<table>
        <thead>
            <tr>
                <th>Titre du sondage</th>
                <th>Choix numéro 1</th>
                <th>Choix numéro 2</th>
                <th>Temps restant</th>
            </tr>
        </thead>
        <tbody>
    <pre>
    </pre>
    <?php

    foreach($exeAllPolls as $user_poll) : ?>
        <tr>
            <td><?= $user_poll->poll_title ?></td>
            <td><?= $user_poll->poll_answer1 ?></td>
            <td><?= $user_poll->poll_answer2 ?></td>
            <td><?= $user_poll->poll_limit ?></td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>


    <h2>Les sondages en cours de mes amis :</h2>
  
    <table>
        <thead>
            <tr>
                <th>Pseudo</th>
                <th>Titre du sondage</th>
                <th>Choix numéro 1</th>
                <th>Choix numéro 2</th>
                <th>Temps restant</th>
            </tr>
        </thead>
        <tbody>
    <pre>
    </pre>
    <?php

    foreach($friendsPolls as $friendPolls) : ?>
        <?php
        foreach($friendPolls as $friendPoll) : ?>
            <tr>
                <td><?= $friendPoll->accepted_id ?></td>
                <td><?= $friendPoll->poll_title ?></td>
                <td><?= $friendPoll->poll_answer1 ?></td>
                <td><?= $friendPoll->poll_answer2 ?></td>
                <td><?= $friendPoll->poll_limit ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>




    
        </tbody>
    </table>

<br><br>
<br>
<br>



    <a href="?page=createPoll">Créer un sondage</a>
    <a href="?page=allMyPolls">Tous mes sondages</a>




</body>
</html>