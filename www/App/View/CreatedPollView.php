<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/created.css">
</head>
<body>

<table>
        <thead>
            <tr>
                <th>Titre du sondage</th>
                <th>Choix numéro 1</th>
                <th>Choix numéro 2</th>
                <th>Date de création</th>
                <th>Date de fin</th>

            </tr>
        </thead>
        <tbody>
    <pre>
   
    </pre>
    <?php
    foreach($getPoll as $poll) : ?>
        <tr>
            <td><?= $poll->poll_title ?></td>
            <td><?= $poll->poll_answer1 ?></td>
            <td><?= $poll->poll_answer2 ?></td>
            <td><?= $poll->created_at ?></td>
            <td><?= $poll->poll_limit ?></td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>