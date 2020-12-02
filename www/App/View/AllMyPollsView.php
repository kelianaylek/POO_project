<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    
<h2>Tous mes sondages :</h2>
<div class="center">
<table>
        <thead>
            <tr>
                <th>Titre du sondage</th>
                <th>Choix numéro 1</th>
                <th>Choix numéro 2</th>
                <th>Date</th>
                <th>Date de fin</th>
                <th>Résultats</th>

            </tr>
        </thead>
        <tbody>
    <pre>
    </pre>
    <?php
    foreach($allMyPolls as $user_poll) : ?>
        <tr>
            <td><?= $user_poll->poll_title ?></td>
            <td><?= $user_poll->poll_answer1 ?></td>
            <td><?= $user_poll->poll_answer2 ?></td>
            <td><?= $user_poll->created_at ?></td>
            <td><?= $user_poll->poll_limit ?></td>
            <td><a href="?page=createdPoll&poll_id=<?= $user_poll->poll_id ?>">Voir</a></td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
    </div>

    <a href="?page=main" class="returnhome">Retour à l'accueil</a>


</body>
</html>